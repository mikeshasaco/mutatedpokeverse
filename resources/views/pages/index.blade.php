@extends('layouts.master')
@section('content')

<style>

@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    .bpokemon{
        background-image: url("966315.png");
        /* background-size: 100%; */
  background-repeat: no-repeat;
  background-position: center;
  height: 1000px;
    }
    
    
    .cardone {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  
  width: 320px;
  height: 446px;
  /* background-color: #FFD700; */
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  /* roatation */
  /* animation: holoCard 15s ease infinite; */
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
}
.cardone.charizard {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
}
.cardone.cardverse {
  --color1: #ffdf35;
  --color2: #65f0ff;
  background-image: url("all.gif");
}
.cardone.mew {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('gold.gif');
}
.cardone.black {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('black.gif');
}
.cardone.pink {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('pink.gif');
}
.cardone > span {
  position: relative;
  top: 45%;
}
.cardone:before,
.cardone:after {
  content: "";
  opacity: .1;
  mix-blend-mode: screen;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background-repeat: no-repeat;
}
.cardone:before {
  background-position: 50% 50%;
  background-size: 300% 300%;
  animation: holoGradient 15s ease infinite both;
  background-image: linear-gradient(
    115deg,
    transparent 0%,
    var(--color1) 30%,
    transparent 47.5%,
    transparent 52.5%,
    var(--color2) 70%,
    transparent 100%
  );
}
.cardone:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/3ov9jQqeeHygU7zXrO/giphy.gif?cid=ecf05e47saar1c14zcrpsx889mhwyo6xb8py1laitbv9rt8b&rid=giphy.gif&ct=g");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.active {
  animation: none;
}
.cardone.active:before {
  opacity: 1;
  animation: none;
  transition: none;
  background-image: linear-gradient(
    115deg,
    transparent 30%,
    var(--color1) 48%,
    var(--color2) 53%,
    transparent 70%
  );
  filter: opacity(0.66);
  mix-blend-mode: screen;
}
.cardone.active:before,
.cardone.active:after {
  animation: none;  
}
.cardone.active:after {
  filter: brightness(2.5);
  mix-blend-mode: screen;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  width: 124px;
  height: 170px;
  box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  animation: none;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  &:before, &:after {
    animation: none;
    opacity: 1;
  } 
}
.demo .cardone:nth-of-type(1) {
  &:before, &:after { display: none; }
}
.demo .cardone:nth-of-type(2) {
  background: none;
  &:before { display: none; }
}
.demo .cardone:nth-of-type(3) {
  background: none;
  &:before { background-position: center; }
  &:after { display: none; }
}
.operator {
  display: inline-block;
  vertical-align: middle;
  font-size: 45px;
}
@keyframes holoSparkle {
  0%, 5%, 100% { opacity: 0.2; background-position: 50% 50%; }
  33% { opacity: 1; background-position: 40% 40%; filter: brightness(2); }
  45% { opacity: 0.4; }
  66% { opacity: 1; background-position: 60% 60%; filter: brightness(2); }
}
@keyframes holoGradient {
  0%, 100% {
    opacity: 0.05;
    background-position: 50% 50%;
  }
  33% {
    background-position: 100% 100%;
    opacity: .66;
  }
  66% {
    background-position: 0% 0%;
    opacity: .66;
  }
}
@keyframes holoCard {
  0%, 100% {
    transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
  }
  33% {
    transform: rotateZ(-10deg) rotateX(20deg) rotateY(-12deg);
  }
  66% {
    transform: rotateZ(10deg) rotateX(-20deg) rotateY(12deg);
  }
}
.telegramimage{
    height: 45px !important;
    width:  40px !important;
}
.twitterimage{
    height: 45px !important;
    width:  40px !important;
}
.demo,
.cardsone { 
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 2000px;
  position: relative;
  z-index: 1;
  transform: translate3d(0.1px, 0.1px, 0.1px )
}
.cardsone .cardone {
  &:nth-child(2) {
    &, &:before, &:after {
      animation-delay: 0.2s;
    }
  }
  &:nth-child(3) {
    &, &:before, &:after {
      animation-delay: 0.4s;
    }
  }
}
@media(max-width:430px){
   .header{
      margin-top: 43px;
  
    }
}


    /* FAQ box */
    .question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}

.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}

.question-title.active h3:after{
    content: '-';
}

.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}

  
</style>


    <!-- Header -->
    <header id="header" class="header" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large" style="color: white !important; font-size:42px;">Mutated PokeVerse</h1>
                        <h3 style="color: red;"><b>7000 unique 3 Eye Charizlord</b> </h3>
                        <p class="p-large" style="color: white !important;"> The year is 2140 and most of the monster have mutated, Charizlord have developed a three eye that can see the future and slow down time. Here your chance to catch one! </p>
                        <a class="btn-solid-lg" style="background: rgb(58,180,87);
background: linear-gradient(90deg, rgba(58,180,87,1) 0%, rgba(253,29,29,1) 38%, rgba(69,252,221,1) 94%);" href="#your-link">Discord</a>
                        <a class="btn-solid-lg secondary" href="#your-link" style="background: rgb(58,180,87);
background: linear-gradient(90deg, rgba(58,180,87,1) 0%, rgba(253,29,29,1) 38%, rgba(69,252,221,1) 94%);">Twitter</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class ="cardone cardverse" >

                    </div>
                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
      
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
    <section class="bpokemon">
        <div>
        </div>

        <div class="container">
            <div class =" row">
                <div class="col-md-4 offset-md-4">
                <h1 style="text-align:center; color:black; padding-bottom:10px; font-family: 'font-family: 'Lobster', cursive; ">Mint</h1>

                    <div class ="cardone cardverse" >

                    </div>

                    <h5 style="text-align:center; font-weight:bold; color:black;">0.07 ETH</h5>

                    <div class =" selector" style="margin-left:38px; padding-top:50px;">
                        <button class="btn btn-primary" style="border-radius: 50%;width: 2.5rem;height: 2.5rem; font-size: 1.35rem;"> - </button>
                        <input type="number" style="max-width: 10rem; border-radius: 50px;">
                        <button class="btn btn-primary" style="border-radius: 50%;width: 2.5rem;height: 2.5rem; font-size: 1.35rem;"> + </button>
                        <br>
                        <button style="font-weight: bold;
    cursor: pointer;
    border-radius: 50px;
    border-color: white;
    align-self: var(--align);
    margin: 0;
    background-color: #007BFF;
    font-size: 1.25rem;
    padding-top: 0.35rem;
    padding-bottom: 0.35rem;
    width: 10rem;
    margin-left:45px;
    margin-top:14px;
    color:white;
    ">Mint</button>

                    </div>
                </div>

            </div>

        </div>

    </section>

        <!-- Details 1 -->
        <div id="details" class="basic-2" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white;">Key Features</h2>
                        <ul>
                        <li>
                            <p style="color:white;">7,000 Charizlord NFTs</p>
                        </li>
                        <li>
                            <p style="color:white;">Up ro 20 Charizlord NFTs Per Transaction</p>
                        </li>
                        <li>
                            <p style="color:white;">0.07 ETH + gas</p>
                        </li>
                        <li>
                            <p style="color:white;">Random Minting</p>
                        </li>
                        <li>
                            <p style="color:white;">5% of sale funds will be used to buy the floor and push the brand!</p>
                        </li>
                        <li>
                            <p style="color:white;">Charizlord will be revealed shortly after the minting</p>
                        </li>

                        </ul>
                     
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="collage.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->



    <!-- Details 3 -->
    <div class="basic-4" style="background-color:black">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <div class ="cardone mew" >

                </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2 style="color:white;">Community Benefits</h2>
                            <ul>
                                <li> <p style="color:white;font-size:28px;">20% of ETH raised will be used for Contest and Giveaway</p> </li>
                                <li> <p style="color:white; font-size:28px;">Access To exclusive member only events</p> </li>
                                <li> <p style="color:white;font-size:28px;">You will be able to Stake your NFT and earn $mpoke token </p> </li>
                                <li> <p style="color:white;font-size:28px;">Voting Rights on Community Events </p> </li>


                            </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of details 3 -->
  


    <!-- Introduction -->
    <div class="basic-1" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:white;">Road Map</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                        <img src="meltedpoka.png" alt="">
                            <h2 style="color:white">25%</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <p style="color:white;">Giveaway 10 NFTs & 5 ETH among 50 Community members!!</p>
                                </li>
                                <li>
                                    <p style="color:white;">Rarity tools & Rarity Sniper Activation</p>
                                </li>
                                <li>
                                    <p style="color:white;">OpenSea Verification</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                        <img src="meltedpoka.png" alt=""> <h2 style="color:white">50%</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <p style="color:white;">Giveaway 10 NFTs & 5 ETH among 50 Community members!!</p>
                                </li>
                                <li>
                                    <p style="color:white;">Building a virtual space where member can hang out show off there NFT</p>
                                </li>
                            </ul>
                         </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                        <img src="meltedpoka.png" alt=""> 
                        <h2 style="color:white">100%</h2>
                        </div>
                        <div class="card-body">
                             <ul>
                                <li>
                                    <p style="color:white;">Giveaway 10 NFTs & 5 ETH among 50 Community members!!</p>
                                </li>
                                <li>
                                    <p style="color:white;">Staking  & Mutated PokeVerse Token (ERC20)</p>
                                </li>
                                <li>
                                    <p style="color:white;">A suprise collection of new mutated pokiverse monsters will be airdropped to all NFT holders</p>
                                </li>
                            </ul>
                        </div>
                    </div>
      

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->



   <section style="background-color:black">

   <!-- Introduction -->
   <div class="basic-1" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:white;">Meet The Team?</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->

   <div class="container"style="background-color:black;">>
        <div class="row " style="background-color:black;">
            <div class =" col-md-4">
                    <!-- Card -->
                    <div class="card"  style="height:300px; width:300px; padding-right: 30px; background-color:black;">
                         <div class ="cardone mew" style="background-color:black;">>

                        </div>
                    </div>
                    <!-- end of card -->

            </div>
            <div class="col-md-4">

                    <!-- Card -->
                    <div class="card"  style="height:300px; width:200px;padding-left: 22px; background-color:black;">
                         <div class ="cardone black" >

                        </div>
                    </div>
                    <!-- end of card -->

            </div>
            <div class="col-md-4">
                  <!-- Card -->
                  <div class="card" style="height:300px; width:200px; padding-left: 43px; background-color:black;">
                         <div class ="cardone pink" >

                        </div>
                    </div>
                    <!-- end of card -->

            </div>

        </div>

    </div>
   </section>

 





    <section id="Merchant-help"  style="padding-top: 100px; padding-bottom:100px; background:black; " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="vouch-merchant-customerh2" style="text-align: center; padding-bottom:80px; font-size: 60px; color:black; ">FAQ</h2>

                    <div class="question-title">
                        <h3 style="color:white;">  What is Mutated Pokiverse Society?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">A community of trainers catching Charizlord for him or herself! 7000 Unique Charizlord are out there in the Ethereum blockchain that possess different attributes and traits from one another. </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;">  When can i Mint?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">October 2st 2021, 2AM EST </p>
                            </div>

                        </div>

                    </div>


                    <div class="question-title">
                        <h3 style="color:white;">  How much to mint a Charizlord ?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">0.07 ETH + Gas</p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;">  How much Charizlord can i mint at a time ?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">You can buy up to 20 Charizlord at a time! </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;">  Where can i buy one Charizlord ?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">When the Project launch you will be able to buy Charizlord on this website.</p>
                            </div>

                        </div>

                    </div>


                    <div class="question-title">
                        <h3 style="color:white;"> How can i buy?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">You will need to have MetaMask installed and set up (If you don't know what MetaMask is or how to install it, please visit <a href="https://metamask.io">MetaMask</a>   for instructions).  In order to buy, connect with your wallet and use the minting interface to select how many Charizlord you want to get.
Click the shiny mint button, approve the transaction on MetaMask and watch charizlord show into your wallet!</p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> What is the Contract Address?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">To Be Announce Soon</p>
                            </div>

                        </div>

                    </div>


                    <div class="question-title">
                        <h3 style="color:white;"> Where can is the Discord link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="">Discord</a> </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> Where can is the Twitter link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="">Twitter</a> </p>
                            </div>

                        </div>

                    </div>

             

                
                    
                  
            </div>

        </div>
    </div>

</section>




   

@endsection

@section('javascripts')
<script  type="text/javascript">
$(document).ready(function(){
	$('.question-title h3').click(function(){
		$(this).next('.content-main').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content-main').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>

@endsection