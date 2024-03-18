<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:0px;
        padding:0px;
        height:100%;
        width:100%;
         font-family: Arial, Helvetica, sans-serif;
    }
    .prompt-input{
        height:40px;
        padding-left:10px;
        align-items:flex-end;
        width: 80%;
        margin-left:20px;
        margin-bottom:20px;
        margin-right:20px;
    }
    .container{
         height:100vh;
        width:100vw;
        display:flex;
        background-color : black;
    }
    .container .sidebar{
        height: 100%;
  width: 20%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start; /* Vertically center the content */
  align-items: center; /* Horizontally center the content */
  background-color: #ECECEC;
    }
    .container .chatbox{
          height:100%;
        width:80%;
        display:flex;
        justify-content:space-between;
        flex-direction:column;
        margin: 0px;
         background-color : #FFFFFF; 
    }
   .container .chatbox .nav-bar{
    margin:0px;
    height: 50px;
    width: 100%;
     background-color :  #FFFFFF; 
   }
     .container .chatbox .nav-bar h2{
        margin-left:10px;
     font-size:15px;
    height: 100%;

   }
   .btn {
  border: none;
  width: 15em;
  height: 5em;
  border-radius: 3em;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  background: #1C1A1C;
  cursor: pointer;
  transition: all 450ms ease-in-out;
}

.sparkle {
  fill: #AAAAAA;
  transition: all 800ms ease;
}

.text {
  font-weight: 600;
  color: #AAAAAA;
  font-size: medium;
}
.btn {
  width: 150px; /* Adjust width to desired size */
  height: 50px; /* Adjust height to desired size */
}
.btn:hover {

  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
   transform: translateY(-2px) scale(0.9);
}
.prompt{
     height: auto;
    width: 60%;
    display: flex;
    position: fixed;
    bottom: 0;

}

.btn:hover .text {
  color: white;
}

.btn:hover .sparkle {
  fill: white;
  transform: scale(1.2);
} 
  .container .chatbox .chat-area{
    margin-bottom: 10px;
    height: 100%;
    margin-bottom:10%;
    scrollbar-width: none; /* Hide the default scrollbar in Firefox */
    -ms-overflow-style: none;
    overflow-y: auto;
    width: 90%;
}
 .container .sidebar2{
          height:100%;
        width:20%;
       background-color : white; 
    }.container .sidebar2 h2{
         font-size:15px;
         color:black;
         margin-left:10px;
    }
    .container .sidebar3{
          height:100%;
        width:10%;
       background-color : white; 
    }
   .container .sidebar .avatar{
        height:150px;
        width: 150px;
        
        border-radius:100px;
     align-items: center;
    }

    
</style>
<body>
    <div class = "container">
      <div class = "sidebar">
       <img class = "avatar" src="avatar.png" alt="avatar">
       <div>
          <h2>Prompts</h2>
              <h5>Create class room</h5>
              <h5>Create Question paper</h5>
              <h5>Create Assienment</h5>
              <h5>Create Quiz</h5>
              <h5>Open class room by name</h5>
              <h5>Open all class rooms</h5>
              <h5>Upload Notes to class</h5>
              

       </div>

      </div>
      
       <div class = "sidebar2">
         <h2>ProctorGPT 1.0</h2>
      </div>
      <div class = "chatbox">
        <div class = "nav-bar">
      
        </div>
        <div class = "chat-area">
            

        </div>


    <div class = "prompt">
      <input type="text" class = "prompt-input"  name="prompt-input" placeholder ="Input Prompt"> 
         <button class="btn" onclick="show()">
    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
    </svg>

    <span class="text">Generate</span>
</button>
</div>
      </div>
 <div class = "sidebar3">
      </div>
    </div>
    
<script>
const chatArea = document.getElementsByClassName("chat-area")[0]; // Corrected the method name and added [0] to access the first element
function show() {
    const prompt = document.getElementsByClassName("prompt-input")[0].value; // Corrected the method name and added [0] to access the value of the first input element
    display(prompt);
}
function display(message) {
    const div = document.createElement("div");
    div.textContent = `You  : ${message}`;
    div.style.marginBottom = '30px'
    div.style.marginLeft = "10px"
    div.style.marginTop = "30px";

    chatArea.appendChild(div); 

    // Scroll to the bottom
    chatArea.scrollTop = chatArea.scrollHeight;

    respond(message)
}
function respond(message){
    if(message === 'hi'){
        const div = document.createElement("div")
        
        const res = "Tailwind CSS is an open source CSS framework. The main feature of this library is that, unlike other CSS frameworks like Bootstrap, it does not provide a series of predefined classes for elements such as buttons"
        div.textContent = `ProctorGPT : ${res}`
        div.style.marginBottom = '10px'
        div.style.marginLeft = "10px"
        div.style.marginTop = "10px";

        chatArea.appendChild(div); 
        
        // Scroll to the bottom
        chatArea.scrollTop = chatArea.scrollHeight;
        
    } else if(message === "open my class rooms"){ // Corrected the comparison operator
        const div = document.createElement("div")
        const res = "Opening Class room....."
        div.textContent = `ProctorGPT : ${res}`
        div.style.marginBottom = '10px'
        div.style.marginLeft = "10px"
        div.style.marginTop = "10px";

        chatArea.appendChild(div); 

        setInterval(() => {
            window.location.assign('index.php')
        }, 2000);

        // Scroll to the bottom
        chatArea.scrollTop = chatArea.scrollHeight;
    }else if(message === "Create class room"){
       const div = document.createElement("div")
        const res = "Enter class name"
        div.textContent = `ProctorGPT : ${res}`
        div.style.marginBottom = '10px'
        div.style.marginLeft = "10px"
        div.style.marginTop = "10px";

        chatArea.appendChild(div); 
    } 

    // Scroll to the newest response div
    chatArea.scrollTop = chatArea.scrollHeight;
}
</script>

</body>

</html>