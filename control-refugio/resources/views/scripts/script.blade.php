<script>

    function upload() {
    
    const fileUploadInput = document.querySelector('.file-uploader');
    
    // using index [0] to take the first file from the array
    const image = fileUploadInput.files[0];
    
    // check if the file selected is not an image file
    if (!image.type.includes('image')) {
        return alert('Only images are allowed!');
    }
    
    // check if size (in bytes) exceeds 10 MB
    if (image.size > 10_000_000) {
        return alert('Maximum upload size is 10MB!');
    }
    const fileReader = new FileReader();
    fileReader.readAsDataURL(image);
    
    
    
    
    fileReader.onload = (fileReaderEvent) => {
    
        const profilePicture = document.querySelector('.profile-picture');
    
        profilePicture.style.backgroundImage = url(</span ><span class="p">${</span><span class="nx">fileReaderEvent</span><span class="p">.</span><span class="nx">target</span><span class="p">.</span><span class="nx">result</span><span class="p">}</span><span class="s2">);
    }
    }
</script>