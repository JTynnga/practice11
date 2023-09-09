<h1>Upload file</h1>
<form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input name="file" type="file" id="formFile"> <br><br>
    <button type="submit">Upload file</button>
</form>
