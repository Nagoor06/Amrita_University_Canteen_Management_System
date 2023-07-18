$(document).ready(function() {
    const qrResult = $("#qr-result");
    const qrDataField = $("#qr-data");

    const qrCodeReader = new QRCodeReader("qr-reader", function(result) {
        qrResult.text(result);
        qrDataField.val(result);
    });

    qrCodeReader.start();
});
