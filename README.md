<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metadata Hybrid Schema Flowchart</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .flowchart-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }
    .section {
      margin: 20px 0;
      padding: 10px;
      border: 2px solid #333;
      width: 80%;
      border-radius: 10px;
    }
    .section h3 {
      text-align: center;
      color: #2c3e50;
    }
    .field {
      margin: 5px 0;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .field p {
      margin: 0;
    }
    .dropdown {
      font-style: italic;
    }
    .link {
      color: #3498db;
    }
  </style>
</head>
<body>

  <div class="flowchart-container">
    <!-- Archival Structure -->
    <div class="section">
      <h3>1️⃣ Archival Structure (Respect des Fonds)</h3>
      <div class="field">
        <p><strong>Fonds:</strong> Highest level of archival hierarchy <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Series:</strong> Subdivision of a fonds grouping related records <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Sub-Series:</strong> Further subdivision within a series <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Collection:</strong> Group of related items within a fonds <span class="dropdown">Dropdown or Link</span></p>
      </div>
      <div class="field">
        <p><strong>Location:</strong> Physical or digital storage location <span class="dropdown">Text</span></p>
      </div>
    </div>

    <!-- Core Metadata -->
    <div class="section">
      <h3>2️⃣ Core Metadata (Descriptive - Dublin Core & MARC21)</h3>
      <div class="field">
        <p><strong>Title:</strong> Name of the item <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Creator:</strong> Author, photographer, or originator <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Date:</strong> Date of creation <span class="dropdown">Date</span></p>
      </div>
      <div class="field">
        <p><strong>Type:</strong> Content type (Text, Image, Video) <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Format:</strong> File format (PDF, JPEG, MP4) <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Description:</strong> Summary of the item <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Subject/Keywords:</strong> Topics covered in the item <span class="dropdown">Multi-Select</span></p>
      </div>
      <div class="field">
        <p><strong>Language:</strong> Language of content <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Identifier:</strong> Unique ID (Auto-generated) <span class="dropdown">Auto-Generated</span></p>
      </div>
      <div class="field">
        <p><strong>Rights/Access:</strong> Public, Private, Copyrighted <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Source:</strong> Where the item originated from <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Publisher:</strong> Organization or person that published it <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Contributor:</strong> Other involved persons (editor, photographer) <span class="dropdown">Dropdown</span></p>
      </div>
      <div class="field">
        <p><strong>Relation:</strong> Link to related records <span class="link">Link</span></p>
      </div>
    </div>

    <!-- Digital Archival Storage -->
    <div class="section">
      <h3>3️⃣ Digital Archival Storage (Technical Metadata - METS)</h3>
      <div class="field">
        <p><strong>Permanent Archive Link:</strong> URL to digital archive <span class="dropdown">URL</span></p>
      </div>
      <div class="field">
        <p><strong>Checksum:</strong> SHA-256/MD5 for integrity <span class="dropdown">Text</span></p>
      </div>
      <div class="field">
        <p><strong>Cloud Storage Link:</strong> Google Drive, Arweave, etc. <span class="dropdown">URL</span></p>
      </div>
    </div>

    <!-- Administrative Metadata -->
    <div class="section">
      <h3>4️⃣ Administrative Metadata (Tracking - EAD/MARC21)</h3>
      <div class="field">
        <p><strong>Added By:</strong> User who created the record <span class="dropdown">Auto-Fill (Username)</span></p>
      </div>
      <div class="field">
        <p><strong>Date Added:</strong> When the record was added <span class="dropdown">Auto-Fill (Timestamp)</span></p>
      </div>
      <div class="field">
        <p><strong>Last Modified:</strong> Last update timestamp <span class="dropdown">Auto-Fill (Timestamp)</span></p>
      </div>
    </div>

  </div>

</body>
</html>
