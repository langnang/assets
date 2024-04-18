<div class="card card-sm {{ $class }}">
  <div class="card-body text-center pt-3 pb-3" name="form_upload">
    <i class="fa-solid fa-cloud-arrow-up" style="font-size: 96px;"></i>
  </div>
  <input type="file" id="file_upload" class="sr-only">
</div>


<script>
  window.onload = function() {
    $("[name='form_upload']").on({
      click: function(e) {
        $('#file_upload').click()
      },
      dragover: function(e) {
        e.preventDefault();
        console.log($(this));
        $(this).addClass('dragover');
      },
      dragleave: function(e) {
        e.preventDefault();
        $(this).addClass('dragover');
      },
      drop: function(e) {
        e.preventDefault();
        $(this).removeClass('dragover');
        const files = e.dataTransfer.files;
        console.log(files);
        // handleUpload(files);
        // for (let i = 0; i < files.length; i++) {

        //   const file = files[i];

        //   const reader = new FileReader();

        //   reader.onload = function(e) {

        //     const fileData = e.target.result;

        //   };

        //   reader.readAsDataURL(file);

        // }
      }
    });

  }
</script>
