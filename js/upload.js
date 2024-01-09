document.getElementById('fileToUpload').addEventListener('change', function() {
  var form = document.getElementById('uploadForm');
  var formData = new FormData(form);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'upload.php', true);

  xhr.onload = function () {
      if (xhr.status === 200) {
          var xmlData = JSON.parse(xhr.responseText);
          document.getElementById('xmlData').innerText = JSON.stringify(xmlData, null, 2);

          // Get the website URL from the XML data
          var websiteUrl = xmlData.url;

          // Get the picked filename
          var pickedFilename = form.fileToUpload.value.split('\\').pop();

          // Set the text of the xmlUrl div to the website URL and picked filename
          document.getElementById('xmlUrl').innerText = 'Scraped Website URL: ' + websiteUrl + '\nFilename: ' + pickedFilename;

          // Set the href attribute of the download button to the URL of the XML file
          document.getElementById('downloadBtn').setAttribute('href', 'uploads/' + pickedFilename);
          // Set the download attribute of the download button to the name of the XML file
          document.getElementById('downloadBtn').setAttribute('download', pickedFilename);
      } else {
          console.error('An error occurred during the transaction');
      }
  };

  xhr.send(formData);
});
document.getElementById('filePickerBtn').addEventListener('click', function() {
  document.getElementById('fileToUpload').click();
});
