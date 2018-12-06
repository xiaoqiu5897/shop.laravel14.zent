<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('admin_assets/css/dropzone.css') }}">
  <script src="{{ asset('admin_assets/js/dropzone.js') }}"></script>
</head>
<body>
  <form action="{{asset('')}}upload/store" class="dropzone" id="awesome-dropzone" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="product_id" value="1">
    <div class="fallback">
      <input name="file" type="file" multiple />
    </div>
  </form>
<style>
.dropzone {
  border: 2px dashed #0087F7;
  border-radius: 5px;
  background: white;
}
</style>
</html>