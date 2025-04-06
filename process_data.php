<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fonds = $_POST["fonds"];
    $series = $_POST["series"];
    $sub_series = $_POST["sub-series"];
    $collection = $_POST["collection"];
    $location = $_POST["location"];
    $title = $_POST["title"];
    $creator = $_POST["creator"];
    $date = $_POST["date"];
    $type = $_POST["type"];
    $format = $_POST["format"];
    $description = $_POST["description"];
    $subject = $_POST["subject"];
    $language = $_POST["language"];
    $identifier = $_POST["identifier"];
    $rights = $_POST["rights"];
    $source = $_POST["source"];
    $publisher = $_POST["publisher"];
    $contributor = $_POST["contributor"];
    $relation = $_POST["relation"];
    $permanent_link = $_POST["permanent-link"];
    $checksum = $_POST["checksum"];
    $cloud_link = $_POST["cloud-link"];
    $file_size = $_POST["file-size"];
    $bit_depth = $_POST["bit-depth"];
    $mime_type = $_POST["mime-type"];
    $added_by = $_POST["added-by"];
    $date_added = $_POST["date-added"];
    $last_modified = $_POST["last-modified"];
    $auto_keywords = $_POST["auto-keywords"];
    $ocr_text = $_POST["ocr-text"];
    $entity_recognition = $_POST["entity-recognition"];

    // You can now process this data as needed.
    // For example:
    // 1. Save it to a database.
    // 2. Write it to a file.
    // 3. Send it via email.
    // 4. Display a confirmation message.

    // For this example, we will simply display the submitted data:
    echo "<h1>Submitted Archival Metadata:</h1>";
    echo "<p><strong>Fonds:</strong> " . htmlspecialchars($fonds) . "</p>";
    echo "<p><strong>Series:</strong> " . htmlspecialchars($series) . "</p>";
    echo "<p><strong>Sub-Series:</strong> " . htmlspecialchars($sub_series) . "</p>";
    echo "<p><strong>Collection:</strong> " . htmlspecialchars($collection) . "</p>";
    echo "<p><strong>Location:</strong> " . htmlspecialchars($location) . "</p>";
    echo "<p><strong>Title:</strong> " . htmlspecialchars($title) . "</p>";
    echo "<p><strong>Creator:</strong> " . htmlspecialchars($creator) . "</p>";
    echo "<p><strong>Date:</strong> " . htmlspecialchars($date) . "</p>";
    echo "<p><strong>Type:</strong> " . htmlspecialchars($type) . "</p>";
    echo "<p><strong>Format:</strong> " . htmlspecialchars($format) . "</p>";
    echo "<p><strong>Description:</strong> " . htmlspecialchars($description) . "</p>";
    echo "<p><strong>Subject/Keywords:</strong> " . htmlspecialchars($subject) . "</p>";
    echo "<p><strong>Language:</strong> " . htmlspecialchars($language) . "</p>";
    echo "<p><strong>Identifier:</strong> " . htmlspecialchars($identifier) . "</p>";
    echo "<p><strong>Rights:</strong> " . htmlspecialchars($rights) . "</p>";
    echo "<p><strong>Source:</strong> " . htmlspecialchars($source) . "</p>";
    echo "<p><strong>Publisher:</strong> " . htmlspecialchars($publisher) . "</p>";
    echo "<p><strong>Contributor:</strong> " . htmlspecialchars($contributor) . "</p>";
    echo "<p><strong>Relation:</strong> " . htmlspecialchars($relation) . "</p>";
    echo "<p><strong>Permanent Archive Link:</strong> " . htmlspecialchars($permanent_link) . "</p>";
    echo "<p><strong>Checksum:</strong> " . htmlspecialchars($checksum) . "</p>";
    echo "<p><strong>Cloud Storage Link:</strong> " . htmlspecialchars($cloud_link) . "</p>";
    echo "<p><strong>File Size:</strong> " . htmlspecialchars($file_size) . "</p>";
    echo "<p><strong>Bit Depth/Resolution:</strong> " . htmlspecialchars($bit_depth) . "</p>";
    echo "<p><strong>MIME Type:</strong> " . htmlspecialchars($mime_type) . "</p>";
    echo "<p><strong>Added By:</strong> " . htmlspecialchars($added_by) . "</p>";
    echo "<p><strong>Date Added:</strong> " . htmlspecialchars($date_added) . "</p>";
    echo "<p><strong>Last Modified:</strong> " . htmlspecialchars($last_modified) . "</p>";
    echo "<p><strong>Auto-Generated Keywords:</strong> " . htmlspecialchars($auto_keywords) . "</p>";
    echo "<p><strong>OCR Text Content:</strong> " . htmlspecialchars($ocr_text) . "</p>";
    echo "<p><strong>Entity Recognition:</strong> " . htmlspecialchars($entity_recognition) . "</p>";
} else {
    // If the page is accessed directly (not via POST), display a message
    echo "<p>This page should be accessed by submitting the form from data3.html.</p>";
}
?>
