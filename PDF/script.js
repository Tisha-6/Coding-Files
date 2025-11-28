// ------------ 1. Text → PDF (simple) --------------
function makePDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    let text = document.getElementById("text").value;

    const margin = 10;
    const lineHeight = 10;
    const maxWidth = 190; // A4 width minus margins
    const pageHeight = doc.internal.pageSize.height;

    // Split text automatically
    const lines = doc.splitTextToSize(text, maxWidth);

    let y = margin;

    lines.forEach(line => {
        if (y > pageHeight - margin) {
            doc.addPage();
            y = margin;
        }
        doc.text(line, margin, y);
        y += lineHeight;
    });

    doc.save("text.pdf");
}




// ------------ 2. HTML Section → PDF --------------
function convertHTML() {
    const element = document.getElementById("content");

    html2pdf().set({
        margin: 10,
        filename: 'html_content.pdf',
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    })
    .from(element)
    .save();
}



// ------------ 3. Image → PDF --------------
function imageToPDF() {
    const file = document.getElementById("imgUpload").files[0];
    if (!file) { alert("Please upload an image."); return; }

    const reader = new FileReader();
    reader.onload = function (e) {

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.addImage(e.target.result, "JPEG", 10, 10, 180, 150);
        doc.save("image.pdf");
    };

    reader.readAsDataURL(file);
}



// ------------ 4. Multi-page Text PDF --------------
// function makeMultiPagePDF() {
//     const { jsPDF } = window.jspdf;
//     const doc = new jsPDF();

//     let text = document.getElementById("multiText").value;

//     let lines = doc.splitTextToSize(text, 180);
//     let y = 10;

//     lines.forEach(line => {
//         if (y > 280) { 
//             doc.addPage(); 
//             y = 10; 
//         }
//         doc.text(line, 10, y);
//         y += 7;
//     });

//     doc.save("multi_page_text.pdf");
// }

// unlimited page //


function makeMultiPagePDF() {
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF({
        unit: "pt",
        format: "a4"
    });

    let text = document.getElementById("multiText").value;
    let lineHeight = 16;
    let margin = 40;
    let maxWidth = pdf.internal.pageSize.getWidth() - margin * 2;
    let maxHeight = pdf.internal.pageSize.getHeight() - margin * 2;

    // Split text into lines that fit the width
    let lines = pdf.splitTextToSize(text, maxWidth);

    let y = margin;

    lines.forEach((line) => {
        if (y > maxHeight + margin) {
            pdf.addPage();
            y = margin;
        }
        pdf.text(line, margin, y);
        y += lineHeight;
    });

    pdf.save("multipage.pdf");
}
