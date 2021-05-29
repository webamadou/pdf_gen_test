require("./bootstrap");
// require("jspdf");
// require("html2canvas");

const pdfBtn = document.getElementById("convertToPDF");

function convertHTMLToPDF() {
    const { jsPDF } = window.jspdf;

    var pdfjs = document.querySelector("#cv-wrapper");
    // const fileWidth = pdfjs.clientWidth;
    var doc = new jsPDF("p", "px", [1053, 1210]);

    doc.html(pdfjs, {
        callback: function (doc) {
            doc.save("output.pdf");
        },
        x: 0,
        y: 0,
    });
}

if (pdfBtn !== null) {
    pdfBtn.addEventListener("click", function (e) {
        e.preventDefault();
        convertHTMLToPDF();
    });
}
