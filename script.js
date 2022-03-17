sign:boolean = false;
months = ["Jan","Feb"] 

//Toggle sign up!!
function toggleSignup()
{
    var unit = document.getElementById("signup-form")
 if(unit.style.display !== "block")
 {
    unit.style.display = "block"
 }
 else
 {
    unit.style.display = "none"
 }
}

//toggle upload
function toggleUpload()
{
  let upload = document.getElementById("drop-here");
  if(upload.style.display !== "grid")
  {
    upload.style.display = "grid"
  }
  else
  {
    upload.style.display = "none"
  }
}
//toggle Nav Bar
function toggleNavBar()
{
  let data = document.getElementById("sidebar");
  if(data.style.display !== "block")
  {
    data.style.display = "block"
  }
  else
  {
    data.style.display = "none"
  }

}


// drag and drop upload
let dropSpace = document.getElementById("drop-here");
let data = ['dragenter', 'dragover', 'dragleave', 'drop'];
data.forEach(eventName => {
   dropSpace.addEventListener(eventName, preventDefaults, false)
 })
 
 function preventDefaults (e) {
   e.preventDefault()
   e.stopPropagation()
 }
 
 ['dragleave', 'drop'].forEach(eventName => {
   dropSpace.addEventListener(eventName, unhighlight, false)
 })
 
 function highlight(e) {
   dropSpace.classList.add('highlight')
 }
 
 function unhighlight(e) {
   dropSpace.classList.remove('highlight')
 }

 dropSpace.addEventListener('drop', handleDrop, false)

 function handleDrop(e) {
   let dt = e.dataTransfer
   let files = dt.files
 
   fileEvent(files)
 }

 function fileEvent(files) {
   ([...files]).forEach(uploadFile)
 }
 function uploadFile(file) {
   let url = 'YOUR URL HERE'
   let formData = new FormData()
 
   formData.append('file', file)
 
   fetch(url, {
     method: 'POST',
     body: formData
   })
   .then(() => { /* Done. Inform the user */ })
   .catch(() => { /* Error. Inform the user */ })
 }