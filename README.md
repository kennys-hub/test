function doPost(e) {
  const sheetName = "Sheet1";  // Replace with the name of your sheet
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  const sheet = ss.getSheetByName(sheetName);

  if (!sheet) {
    return ContentService.createTextOutput("Sheet not found: " + sheetName).setMimeType(ContentService.MimeType.TEXT);
  }

  const data = JSON.parse(e.postData.contents);
  const headerRow = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];
  const newRow = [];

  // Ensure that the incoming data keys match the sheet headers.
  headerRow.forEach(header => {
    if (data.hasOwnProperty(header)) {
      newRow.push(data[header]);
    } else {
      newRow.push(""); // Or some other default value
    }
  });
  sheet.appendRow(newRow);

  // Return a success message
  return ContentService.createTextOutput(JSON.stringify({ result: "success", message: "Data saved successfully." })).setMimeType(ContentService.MimeType.JSON);
}
