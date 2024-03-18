<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NFT landing page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 <script src="https://cdn.tailwindcss.com"></script>  
</head>
  <style>
    body {
  margin: 0;
  background-color: #252954;
}

.hidden {
  display: none;
}

.landingpage {
  margin: 0 auto;
  padding: 0 80px;
  position: relative;
  max-width: 1100px;
  overflow-y: auto;
  overflow-x: hidden;
  background-color: #1F1D2B;
}
.landingpage::before {
  content: "";
  position: absolute;
  width: 123px;
  height: 123px;
  left: 60%;
  top: 138px;
  filter: blur(90px);
  background-color: #FB37FF;
}
.landingpage::after {
  content: "";
  position: absolute;
  width: 123px;
  height: 123px;
  left: 80%;
  top: 550px;
  background-color: #18B2DE;
  filter: blur(80px);
}
.landingpage .navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
  width: 100%;
}
.landingpage .box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 80px;
}


.landingpage .footer2 {
  display: flex;
  justify-content: space-between;
  padding-bottom: 30px;
  border-top: 1px solid #F2F2F2;
}

.navbar .hamburgerlogowrap {
  display: flex;
  align-items: center;
}
.navbar .hamburger {
  display: none;
  color: #D7D7D7;
  background-color: #1F1D2B;
  border: none;
  margin-right: 10px;
}
.navbar .createbtn {
  cursor: pointer;
  background-color: transparent;
  border: none;
  width: 126px;
  height: 45px;
  color: #BCBCBC;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
}
.navbar .createbtn.selectedbtn {
  border: 1px solid #D7D7D7;
  border-radius: 10px;
}
.navbar .navlogo {
  height: 100%;
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
}
.navbar .navlink {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #BCBCBC;
}
.navbar .navlink.selectedlink {
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  border-bottom: 1.5px solid #9B51E0;
}
.navbar .navlink:not(:last-child) {
  margin-right: 32px;
}

.box .infobox {
  animation-name: leftslide;
  animation-duration: 0.8s;
  max-height: 500px;
  max-width: 55%;
  overflow: hidden;
}
.box .infobox-boldtext {
  margin: 0;
  font-family: Poppins;
  color: #FFFFFF;
  font-size: 65px;
  font-weight: 600;
  line-height: 60px;
  letter-spacing: -2px;
  text-align: left;
}
.box .infobox-slimtext {
  margin: 24px 0;
  font-family: Poppins;
  color: #FFFFFF;
  font-size: 16px;
  font-weight: 400;
  line-height: 18px;
  letter-spacing: 0.5px;
  text-align: left;
}
.box .infobox-btnwrapper {
  display: flex;
}
.box .infobox-explorebtn {
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #1F1D2B;
  padding: 8px 38px;
  border-radius: 16px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.box .infobox-createbtn {
  cursor: pointer;
  margin-left: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  padding: 8px 38px;
  border: 1px solid #D7D7D7;
  border-radius: 16px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.box .infobox .selected {
  border: none;
  background: linear-gradient(103.91deg, #9B51E0 21.01%, rgba(48, 129, 237, 0.8) 100%);
}
.box .display {
  animation-name: rightslide;
  animation-duration: 0.8s;
  padding: 14px;
  border: 1px solid;
  background: linear-gradient(169.44deg, rgba(58, 129, 191, 0.08) 1.85%, rgba(65, 48, 90, 0.08) 98.72%);
  border-radius: 35px;
  max-height: 450px;
  max-width: 50%;
  overflow: hidden;
}
.box .display-nft {
  object-fit: cover;
  flex-shrink: 0;
  width: 300px;
  height: 300px;
  border-radius: 20px;
}
.box .display .infowrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 10px;
}
.box .display .info {
  display: flex;
  align-items: center;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 600;
  font-size: 12px;
}
.box .display .info p {
  margin: 0;
}
.box .display .info-img {
  object-fit: cover;
  flex-shrink: 0;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 10px;
}
.box .display .info2 {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  font-family: "Poppins";
  color: #FFFFFF;
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
}
.box .display .info2 p {
  margin: 0;
}
.box .display .info2 .iconwrapper {
  display: flex;
  align-items: center;
}
.box .display .info2 .iconwrapper svg {
  margin-right: 5px;
}


.auction .title .titlebold {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 48px;
  display: flex;
  line-height: 72px;
}
.auction .title .titleslim {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  color: #D7D7D7;
  font-weight: 600;
  font-size: 18px;
  line-height: 36px;
  letter-spacing: -1px;
}

.started {
  margin-top: 100px;
  display: flex;
  flex-direction: column;
}
.started-boldtext {
  margin: 0;
  align-self: center;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 40px;
  line-height: 72px;
}
.started-slimtext {
  margin: 0;
  align-self: center;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 36px;
  letter-spacing: 0.5px;
  color: #E2E2E2;
}
.started-items {
  padding: 60px 80px;
  position: relative;
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-column-gap: 20px;
  grid-row-gap: 20px;
  justify-content: space-between;
}
.started-items:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100px;
  top: 80px;
  filter: blur(80px);
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
}
.started-items .itemwrapper p {
  width: 100px;
  margin: 0;
  margin-top: 10px;
  text-align: center;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  color: #FFFFFF;
}
.started-items-item {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
  border-radius: 18px;
  background-color: red;
  background: rgba(255, 255, 255, 0.095);
  box-shadow: inset 2.01px -2.01px 20px rgba(214, 214, 214, 0.17), inset -3.01333px 3.01333px 3.01333px rgba(255, 255, 255, 0.39);
  backdrop-filter: blur(74.4293px);
}


.footer-main {
  max-width: 40%;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 30px;
  line-height: 40px;
  color: #FFFFFF;
}
.footer-navigate {
  display: flex;
}
.footer-navigate .nav {
  margin-left: 60px;
}
.footer-navigate .nav h5 {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 30px;
  color: #FFFFFF;
}
.footer-navigate .nav p {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 18px;
  letter-spacing: 0.03em;
  color: #D7D7D7;
}

.footer2 p {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 36px;
  color: #828282;
}

.item {
  display: flex;
  flex-direction: column;
  justify-self: center;
}
.item-img {
  object-fit: cover;
  flex-shrink: 0;
  width: 200px;
  height: 220px;
  border-radius: 10px;
  transition: 0.3s;
  cursor: pointer;
}
.item-img:hover {
  transform: scale(1.05);
}
 .card {
      display: grid;
    flex: 0 1 calc(33.33% - 20px); /* Adjust width and margins as needed */
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    background-color: #6B6ECC;
    background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
    box-shadow: 0 10px 15px -3px rgba(33,150,243,.4), 0 4px 6px -4px rgba(33,150,243,.4);
    color: white;
  }

  /* Additional styles for card content */
  .card-content {
    text-align: center;
  }

  .card-content .title {
    font-size: 25px;
    font-weight: 800;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.64);
    margin-top: 10px;
    letter-spacing: 1px;
  }

  .card-content .price {
    font-size: 50px;
    font-weight: 800;
    color: white;
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
  }

  .card-content .description {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.6);
    margin-top: 10px;
  }

  .card-content button {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: rgb(33 150 243);
    border-radius: 5px;
    border: none;
    color: white;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .card-content button:hover {
    background-color: #1e88e5; /* Adjust hover color as needed */
  }
.item-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid white;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
  line-height: 24px;
  color: #FFFFFF;
}
.item-date {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 24px;
  color: #BCBCBC;
}

.filters {
  display: flex;
  align-items: center;
}
.card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  width: 260px;
  padding: 20px 1px;
  margin: 10px 0;
  text-align: center;
  position: relative;
  cursor: pointer;
  box-shadow: 0 10px 15px -3px rgba(33,150,243,.4),0 4px 6px -4px rgba(33,150,243,.4);
  border-radius: 10px;
  background-color: #6B6ECC;
  background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
}

.content {
  padding: 20px;
}

.content .price {
  color: white;
  font-weight: 800;
  font-size: 50px;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
}

.content .description {
  color: rgba(255, 255, 255, 0.6);
  margin-top: 10px;
  font-size: 14px;
}

.content .title {
  font-weight: 800;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.64);
  margin-top: 10px;
  font-size: 25px;
  letter-spacing: 1px;
}

button {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: none;
  outline: none;
  color: rgb(255 255 255);
  text-transform: uppercase;
  font-weight: 700;
  font-size: .75rem;
  padding: 0.75rem 1.5rem;
  background-color: rgb(33 150 243);
  border-radius: 0.5rem;
  width: 90%;
  text-shadow: 0px 4px 18px #2c3442;
}


.filters .filter {
  display: flex;
  align-items: center;
  margin-right: 30px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #FFFFFF;
}
.filters .filter svg {
  margin-right: 5px;
  margin-left: 5px;
}
.filters .filterbtn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 30px;
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  border: none;
  border-radius: 10px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #FFFFFF;
}
.filters .filterbtn svg {
  margin-right: 5px;
}
.cards-container{
  margin-top:30px;
  height:auto;
  justify-content:center;
  gap:100px;
  display:flex;
  margin-bottom:30px;
}

@media screen and (max-width: 1500px) {
  .landingpage {
    max-width: 1200px;
  }
}
@media screen and (max-width: 1040px) {
  .box {
    flex-direction: column;
  }
  .box .infobox {
    max-height: 450px;
    max-width: none;
    margin-bottom: 50px;
  }
  .box .display {
    display: none;
    max-height: none;
    max-width: none;
  }

  .auction .nft {
    grid-template-columns: auto auto;
    justify-content: space-around;
  }

  .discover-items {
    grid-template-columns: auto auto auto;
    justify-content: space-around;
  }

  .footer {
    flex-direction: column;
  }
  .footer-main {
    max-width: 80%;
    margin-bottom: 50px;
    text-align: center;
  }
  .footer-navigate .nav:first-child {
    margin: 0;
  }
}
@media screen and (max-width: 925px) {
  .navlinkwrap {
    display: none;
  }

  .buttonwrap {
    display: none;
  }

  .hamburger {
    display: flex !important;
    align-items: center;
  }

  .started-slimtext {
    text-align: center;
  }
}
@media screen and (max-width: 825px) {
  .started-items {
    display: grid;
    grid-template-columns: auto auto;
    justify-content: space-evenly;
    padding: 50px 0;
  }
  .started-items:before {
    height: 200px;
    top: 90px;
    filter: blur(120px);
  }

  .discover-items {
    grid-template-columns: auto auto;
    justify-content: space-around;
  }
}
@media screen and (max-width: 700px) {
  .box {
    flex-direction: column;
  }
  .box .infobox {
    max-height: none;
    max-width: none;
    margin-bottom: 50px;
  }
  .box .display {
    display: block;
    max-height: none;
    max-width: none;
  }

  .discover-title {
    justify-content: center;
  }
  .discover-title .filters {
    display: none;
  }

  .auction .title {
    justify-content: center;
  }
  .auction .title .titleslim {
    display: none;
  }
}
@media screen and (max-width: 600px) {
  .landingpage {
    padding: 0 20px;
  }

  .box .infobox-boldtext {
    font-size: 45px;
    line-height: 50px;
  }
  .box .infobox-slimtext {
    font-size: 12px;
    line-height: 16px;
  }

  .discover-items {
    grid-template-columns: auto;
    justify-content: space-around;
  }

  .auction .nft {
    grid-template-columns: auto;
    justify-content: space-around;
  }

  .footer-main {
    font-size: 20px;
    line-height: 30px;
    max-width: 100%;
    margin-bottom: 50px;
    text-align: center;
  }

  .footer-navigate {
    justify-content: space-between;
    width: 100%;
  }
  .footer-navigate .nav {
    margin-left: 20px;
  }
  .footer-navigate .nav h5 {
    font-size: 15px;
    line-height: 30px;
  }
  .footer-navigate .nav p {
    font-size: 10px;
    line-height: 18px;
  }
}
@media screen and (max-width: 480px) {
  .landingpage .box .infobox-boldtext {
    font-size: 32px;
    line-height: 1.4em;
    text-align: center;
  }
  .landingpage .box .infobox-slimtext {
    text-align: center;
  }
  .landingpage .box .infobox-btnwrapper {
    justify-content: center;
  }
}
@keyframes leftslide {
  from {
    transform: translateX(-700px);
  }
  to {
    transform: translateX(0px);
  }
}
@keyframes rightslide {
  from {
    transform: translateX(550px);
  }
  to {
    transform: translateX(0px);
  }
}
.idk{
  margin-top:10px;
  color:white;

}
  </style>
  <body>
    <div class="landingpage">
      <div class="navbar">
        <a class="navlogo">Proctor Vibe</a>
        <button class="hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
              <path d="M3 12h18M3 6h18M3 18h18"/>
            </svg>
          </button>
        <div class="navlinkwrap">
          <span class="navlink selectedlink">Home</span>
          <span class="navlink">My Profile</span>
          <span class="navlink">Activity</span>
          <span class="navlink">How It Works</span>
        </div>
        <div class="buttonwrap">
          <button class="createbtn selectedbtn">CREATE</button>
          <button class="createbtn">SIGN IN</button>
        </div>
      </div>
      <div class="box">
        <div class="infobox">
          <p class="infobox-boldtext">
            Empowering Professors Beyond Teaching
          </p>
          <p class="infobox-slimtext">
            In aenean posuere lorem risus nec. Tempor tincidunt aenean purus purus vestibulum nibh mi venenatis
          </p>
          <div class="infobox-btnwrapper">
            <button class="infobox-explorebtn selected">Explore</button>
            <button class="infobox-createbtn">Create</button>
          </div>
        </div>
        <div class="display">
          <img class="display-nft" src="prof.png" alt="unsplash-OG44d93i-NJk" border="0">
          <div class="infowrapper">
        
            <div class="info2">
              <div class="iconwrapper">
          
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="idk">
            In aenean posuere lorem risus nec. Tempor tincidunt aenean purus purus vestibulum nibh mi venenatis Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti veritatis porro mollitia iusto, doloremque voluptatum corrupti corporis! Quos, dolore aliquam. Atque voluptate asperiores ipsam impedit tempora modi ullam aliquid laboriosam?
          </p>
      <div class="auction">

          <div class="cards-container">
      <!-- Card 1 -->
    <div class="flex flex-col bg-white rounded-3xl">
  <div class="px-6 py-8 sm:p-10 sm:pb-6">
    <div class="grid items-center justify-center w-full grid-cols-1 text-left">
      <div>
        <h2
          class="text-lg font-medium tracking-tighter text-gray-600 lg:text-3xl"
        >
          Starter
        </h2>
        <p class="mt-2 text-sm text-gray-500">Suitable to grow steadily.</p>
      </div>
      <div class="mt-6">
        <p>
          <span class="text-5xl font-light tracking-tight text-black">
            $25
          </span>
          <span class="text-base font-medium text-gray-500"> /mo </span>
        </p>
      </div>
    </div>
  </div>
  <div class="flex px-6 pb-8 sm:px-8">
    <a
      aria-describedby="tier-company"
      class="flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
      href="#"
    >
      Get started
    </a>
  </div>
</div>


      <!-- Card 2 -->
      
<div class="flex flex-col bg-white rounded-3xl">
  <div class="px-6 py-8 sm:p-10 sm:pb-6">
    <div class="grid items-center justify-center w-full grid-cols-1 text-left">
      <div>
        <h2
          class="text-lg font-medium tracking-tighter text-gray-600 lg:text-3xl"
        >
          Starter
        </h2>
        <p class="mt-2 text-sm text-gray-500">Suitable to grow steadily.</p>
      </div>
      <div class="mt-6">
        <p>
          <span class="text-5xl font-light tracking-tight text-black">
            $25
          </span>
          <span class="text-base font-medium text-gray-500"> /mo </span>
        </p>
      </div>
    </div>
  </div>
  <div class="flex px-6 pb-8 sm:px-8">
    <a
      aria-describedby="tier-company"
      class="flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
      href="#"
    >
      Get started
    </a>
  </div>
</div>

      <!-- Card 3 -->
      <div class="flex flex-col bg-white rounded-3xl">
  <div class="px-6 py-8 sm:p-10 sm:pb-6">
    <div class="grid items-center justify-center w-full grid-cols-1 text-left">
      <div>
        <h2
          class="text-lg font-medium tracking-tighter text-gray-600 lg:text-3xl"
        >
          Starter
        </h2>
        <p class="mt-2 text-sm text-gray-500">Suitable to grow steadily.</p>
      </div>
      <div class="mt-6">
        <p>
          <span class="text-5xl font-light tracking-tight text-black">
            $25
          </span>
          <span class="text-base font-medium text-gray-500"> /mo </span>
        </p>
      </div>
    </div>
  </div>
  <div class="flex px-6 pb-8 sm:px-8">
    <a
      aria-describedby="tier-company"
      class="flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
      href="#"
    >
      Get started
    </a>
  </div>
</div>

    </div>
  </div>
  </div>
    
      <div class="footer2">
        <div></div>
        <p>Copyright 2021 Gaslur</p>
      </div>
    </div>
  </body>
</html>
