<template>
    <div class="inBuild">
        <img src="./images/warning.png" class="iconWarning">
        <p class="error_text">Ta strona jest aktualnie remontowana. Przepraszamy za utrudnienia. Życzymy miłego słuchania.</p>
        <img src="./images/warning.png" class="iconWarning">
    </div>
    <nav>
        <div class="nav_logo">
            <a href="#">
                <img src="./images/logo.png">
            </a>
        </div>
        
        <ul class="nav-links">
            <li class="link"><a href="#">Info</a></li>
            <li class="link"><a href="#">Program</a></li>
            <li class="link"><a href="#">Muzyka</a></li>
            <li class="link"><a href="#">Redaktorzy</a></li>
        </ul>
    </nav>

    
    <header class="container">
            <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>CREATE YOUR SITE LIKE PRO</h4>
            <H1>Hi, I'm <span>Simon</span>, programer</H1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="image">
            <img src="images/header.png">
        </div>
    </header>
    
    <div class="audio_player">
        <audio-player title="My cool super long named audio sound"
            src="song/song.mp3"
            bar-width="5"
            bar-gap="2"
            preload autoplay
        ></audio-player>
    </div>
    
    <body class="container">
        
        <!-- <div class="people" id="listOfPeople">
            <li v-for="item in people" style="list-style: none;">
                <div class="card">
                    <img :src="item.photo" class="picture">
                    <p class="name">{{ item.name }}</p>
                    <p class="opis">{{item.opis}}</p>
                </div>
            </li>
        </div> -->
        
    </body>
</template>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    padding: 0;
    margin: 0;
    outline: none;
    border: none;
    box-sizing: border-box;
    color: #DFF6FF;
}

img{
    width: 100%;
    display: flex;
}

a{
    text-decoration: none;
}

body{
    font-family: 'Poppins', sans-serif;
    background-color: #06283D;
}

nav{
    max-width: 1200px;
    margin: auto;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.nav_logo{
    max-width: 77px;

}

.nav-links{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 3rem;
}

.link a{
    position: relative;
    padding-bottom: 0.75rem;
    color: #DFF6FF;
}

.link a::after{
    content: "";
    position: absolute;
    height: 2px;
    width: 0;
    bottom: 0;
    left: 0;
    background-color:  #A9DCFF;
    transition: all 0.3s ease;
}

.link a:hover::after{
    width: 70%;
}

.btn{
    padding: 1rem 2rem;
    font-size: 1rem;
    color: #DFF6FF;
    background-color:  #A9DCFF;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn:hover{
    background-color: #1363DF;

}

.container{
    max-width: 1200px;
    margin: auto;
    padding: 0 2rem;
}

.blur{
    position: absolute;
    box-shadow: 0 0 1000px 50px #A9DCFF;
    z-index: -100;
}

header{
    position: relative;
    padding-top: 2rem;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem
}

.picture
{
    width: 9rem;
    height: 9rem;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1.5rem;
    margin-bottom: 1rem;
    background-color: #fff;
    border-radius: 0.5rem;
}

.card{
    /* background-color: rgb(0, 111, 139);
    border: solid 0.4rem rgb(1, 79, 99);
    border-radius: 1rem;
    box-shadow: 0 4px 8px 0 rgba(1, 29, 36, 0.2), 0 6px 20px 0 rgba(1, 29, 36, 0.2);
    margin: 0.2rem;
    transition: .2s; */
    
    box-shadow: 0 7px 20px 5px #00000088;
    margin: 0.4rem;
    width: 13rem;
    height: 20rem;
    user-select: none;
    max-width: 300px;
    border: 1px solid #ffffff22;
    background: linear-gradient(0deg, #5d6168 0%, rgba(17, 0, 32, 0.5) 100%);
    border-radius: 0.7rem;
    backdrop-filter: blur(7px);
    overflow: hidden;
    transition: 0.5s;
}

.card:hover{
    transform: scale(1.1) .2s;
    position: relative;
    z-index: 2;
    
    box-shadow: 0 7px 20px 5px #00000088;
}

.people{
    /* background-color: antiquewhite; */
    margin-left: auto;
    margin-right: auto;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    align-items: center;
    width: fit-content;
    margin-top: 3rem;
}

.name, .opis{
    margin: auto;
    text-align: center;
}

.name{
    font-weight: bold;
    margin-left: 3px;
    margin-right: 3px;
}

/* ---------------------------------------------------------- */

.audio_player{
    position: sticky;
    top: 1rem;
    z-index: 10;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
    margin-top: 1rem;
    margin-bottom: 6rem;
}

/* 88888888888888888888888888888888888888888888888 */
.wypelniacz{
    width: 200px;
    height: 5000px;
    background-color: #fff;
}

.inBuild
{
    display: flex;
    background-color: #ffff0087;
    border-bottom: 0.3rem solid #ffffff87;
}

.iconWarning{
    width: 2rem;
    height: 2rem;
    margin: auto;
    /* padding-top: 0.2rem;
    padding-bottom: 0.2rem; */
}

.error_text{
    margin: auto;
  font-style: italic;
  font-size: larger;
  padding: 0.6rem;
}
</style>