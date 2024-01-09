document.getElementById('saveBtn').addEventListener('click', function() {
  var title = document.getElementById('title').value;
  var description = document.getElementById('description').value;
  var fileToUpload = document.getElementById('fileToUpload').files[0];

  var formData = new FormData();
  formData.append('title', title);
  formData.append('description', description);
  formData.append('fileToUpload', fileToUpload);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save.php', true);
  xhr.onload = function () {
      if (xhr.status === 200) {
          // Data saved successfully
          console.log(this.responseText);
      } else {
          console.error('An error occurred during the transaction');
      }
  };
  xhr.send(formData);
});
