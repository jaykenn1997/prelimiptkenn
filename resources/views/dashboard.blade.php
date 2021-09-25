@extends('base')

@section('content')

<style>
</style>

  <div class="container">
  <h1 class="title text-light" >My Track Music </h1>
  </div>

  <style>

    .center {
      padding: 70px 0;
      border: 3px solid green;
      text-align: center;
      margin-top: 15%;
    }

    :root{
 --main-bg-color: rgb(248, 248, 248); 
 --dark-blue: rgb(0, 20, 77);
}
html, body{
  width: 100%;
  height: 100%;
  color: var(--dark-blue);
}

img{
  object-fit: cover;
}

body{
  	background-image: url("https://images.unsplash.com/photo-1497897271578-5f45bb7a8400?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: 'Helvetica Neue', sans-serif;
	font-size: 14px;
}

.content{
  width: 65%;
  max-width: 950px;
  min-width: 800px;
  height: 70%;
  min-height: 600px;
  background-color: var(--main-bg-color);
  margin: 50px;
  border-radius: 8px;
  box-shadow: 2px 10px 40px rgba(22,20,19,0.4);
  display: flex;
}

/* 
----------------------------
        Left Sidebar
----------------------------
*/

.left-sidebar, .main, .right-sidebar{
  padding-top: 80px;
}

.left-sidebar{
  width: 17%;
  min-width: 150px;
  height: calc(100% - 100px);
  background-color: rgb(243, 243, 243);
  border-bottom-left-radius: 8px;
  border-top-left-radius: 8px;
}
.left-sidebar ul{
  list-style-type: none;
}
.left-sidebar li{
  padding-bottom: 10px;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.5px;
}
.left-sidebar li svg{
  width: 12px;
  height: 12px;
  padding-right: 10px;
}

.left-sidebar li path{
  fill: rgb(0, 20, 77);
}

.sidebar.heading{
  padding-left: 40px;
  opacity: .5;
  font-size: 12px;
  letter-spacing: .5px;
}

/* 
----------------------------
        Top Bar
----------------------------
*/
.topbar ul{
  list-style-type: none;
  position: absolute;
  margin-top: 20px;
}

.topbar li{
  display: inline;
  margin: 7px;
  font-size: 14px;
}

.topbar li a{
  text-decoration: none;
  font-weight: bold;
  letter-spacing: .5px;
  color: rgb(0, 20, 77);
}

button.purple{
  text-align: left;
  padding: 0;
  width: 160px;
/*   height: 30px; */
  color: white;
  border: none;
  border-radius: 6px;
  background-color: #d287c2;
  font-size: 12px;
  font-family: 'Roboto';
  letter-spacing: .5px;
  vertical-align: middle;
}
button.purple p{
/*   margin: 0; */
  margin-top: 10px;
  display: inline;
  vertical-align: middle;
  padding: 12px;
  line-height: 40px;
}
button.purple svg{
  float: right;
  height: 100%;
/*  Change later  */
  background-color: #d494c6;
  width: 100%;
  padding: 8px;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  vertical-align: middle;
}

/* 
----------------------------
        Main Content
----------------------------
*/
.main{
  width: 83%;
}

/* 
----------------------------
        Albums Header
----------------------------
*/
.header-albums{
  display: flex;
  padding: 10px;
}
.album{
  margin: 10px;
  width: 110px;
}
.album-cover{
  width: 100px;
  height: 100px;
  border-radius: 5px;
  box-shadow: 2px 5px 10px rgba(22,20,19,0.3);
}
.album p {
  margin: 0
}

.album .track-name, .album .track-type{
  font-size: 12px;
}
.album .track-name{
  font-weight: 600;
  margin-top: 7px;
  margin-bottom: 3px;
}
.album .track-type{
  font-weight: 400;
  opacity: .5;
  font-size: 12px;
}
/* 
----------------------------
        Tracks
----------------------------
*/
.tracks{
  display: flex;
  padding: 10px;
  width: 90%;
}
.tracks h3{
  font-size: 16px;
  margin-left: 10px;
}

.for-you{
  flex: 3;
  padding: 10px;
}
.history{
  flex: 2;
  padding: 10px;
}
.single-track{
  display: flex;
  background-color: white;
  margin-bottom: 10px;
  align-items: center;
  justify-content: space-between;
  padding: 5px;
}
.single-track .image{
  width: 25px;
  height: 25px;
  border-radius: 50%;
  margin-left: 15px;
  margin-right: 10px;
  box-shadow: 0px 1px 10px rgba(22,20,19,0.4);
}
.single-track .name, .single-track .artist{
  font-weight: 600;
  font-size: 12px;
}
.single-track .name, .single-track .artist, .single-track .time{
  flex: 1;
}
.single-track .time{
 color: #5ca3fb/*#d881d8*/;
  font-size: 12px;
}

.history-track{
  display: flex;
  background-color: white;
  align-items: center;
/*   padding: 15px; */
  height: 55.5px;
  border-bottom: 2px solid var(--main-bg-color);
}

.history-track .name{
  font-weight: 600;
  font-size: 12px;
}
.history-track .artist{
  font-size: 12px;
  opacity: .5;
}
.history-track .cover{
  width: 27px;
  height: 27px;
  border-radius: 5px;
  margin-left: 15px;
  margin-right: 10px;
}

.history-track p{
  margin: 0;
}

.history-track .play-button{
  margin-left: auto;
}

.play-button{
  margin-left: 15px;
  margin-right: 15px;
  width: 27px;
  height: 27px;
  border-radius: 50%;
  background-color: #d287c2;
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>
    <br>
    <br>
    <div>
      <!-- Inspired by Desktop Music App by Hasham Mohamed (https://dribbble.com/shots/6111462-Desktop-Music-App/attachments)
-->

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div class="content">
  <div class="topbar">
    <ul>
      <li>
        <button class="purple"><p>Create Playlist</p> 
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#ffffff" d="M2,16H10V14H2M18,14V10H16V14H12V16H16V20H18V16H22V14M14,6H2V8H14M14,10H2V12H14V10Z" />
          </svg>
        </button>
      </li>
      <li>
        <a href="">Featured Tracks</a>
      </li>
      <li>
        <a href="">Charts</a>
      </li>
      <li>
        <a href="">Videos</a>
      </li>
  </div>
  <div class="left-sidebar">
    <ul>
      <li><svg viewBox="0 0 24 24">
    <path d="M16,9H13V14.5A2.5,2.5 0 0,1 10.5,17A2.5,2.5 0 0,1 8,14.5A2.5,2.5 0 0,1 10.5,12C11.07,12 11.58,12.19 12,12.5V7H16V9M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M5,5V19H19V5H5Z" />
</svg> Explore</li>
      <li><svg viewBox="0 0 24 24">
    <path d="M12,10A2,2 0 0,1 14,12C14,12.5 13.82,12.94 13.53,13.29L16.7,22H14.57L12,14.93L9.43,22H7.3L10.47,13.29C10.18,12.94 10,12.5 10,12A2,2 0 0,1 12,10M12,8A4,4 0 0,0 8,12C8,12.5 8.1,13 8.28,13.46L7.4,15.86C6.53,14.81 6,13.47 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12C18,13.47 17.47,14.81 16.6,15.86L15.72,13.46C15.9,13 16,12.5 16,12A4,4 0 0,0 12,8M12,4A8,8 0 0,0 4,12C4,14.36 5,16.5 6.64,17.94L5.92,19.94C3.54,18.11 2,15.23 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12C22,15.23 20.46,18.11 18.08,19.94L17.36,17.94C19,16.5 20,14.36 20,12A8,8 0 0,0 12,4Z" />
</svg> Stations</li>
      <li><svg viewBox="0 0 24 24">
    <path d="M17,4H7A5,5 0 0,0 2,9V20H20A2,2 0 0,0 22,18V9A5,5 0 0,0 17,4M10,18H4V9A3,3 0 0,1 7,6A3,3 0 0,1 10,9V18M20,18H12V9C12,7.92 11.65,6.86 11,6H17A3,3 0 0,1 20,9V18M13,11V13H17V15H19V11H13M9,11H5V9H9V11Z" />
</svg> Inbox</li>
      <li><svg viewBox="0 0 24 24">
    <path d="M9,3A4,4 0 0,1 13,7H5A4,4 0 0,1 9,3M11.84,9.82L11,18H10V19A2,2 0 0,0 12,21A2,2 0 0,0 14,19V14A4,4 0 0,1 18,10H20L19,11L20,12H18A2,2 0 0,0 16,14V19A4,4 0 0,1 12,23A4,4 0 0,1 8,19V18H7L6.16,9.82C5.67,9.32 5.31,8.7 5.13,8H12.87C12.69,8.7 12.33,9.32 11.84,9.82M9,11A1,1 0 0,0 8,12A1,1 0 0,0 9,13A1,1 0 0,0 10,12A1,1 0 0,0 9,11Z" /></svg> Artists</li>
      <li><svg viewBox="0 0 24 24">
    <path d="M12,11A1,1 0 0,0 11,12A1,1 0 0,0 12,13A1,1 0 0,0 13,12A1,1 0 0,0 12,11M12,16.5C9.5,16.5 7.5,14.5 7.5,12C7.5,9.5 9.5,7.5 12,7.5C14.5,7.5 16.5,9.5 16.5,12C16.5,14.5 14.5,16.5 12,16.5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
</svg> Albums</li>
      <li><svg viewBox="0 0 24 24">
    <path d="M19.43,12.97L21.54,14.63C21.73,14.78 21.78,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.03 19.05,18.95L16.56,17.94C16.04,18.34 15.5,18.67 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.78,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,12.97M6.5,12C6.5,12.58 6.59,13.13 6.75,13.66L4.68,15.36L5.43,16.66L7.95,15.72C8.69,16.53 9.68,17.12 10.8,17.37L11.24,20H12.74L13.18,17.37C14.3,17.13 15.3,16.54 16.05,15.73L18.56,16.67L19.31,15.37L17.24,13.67C17.41,13.14 17.5,12.58 17.5,12C17.5,11.43 17.41,10.87 17.25,10.35L19.31,8.66L18.56,7.36L16.06,8.29C15.31,7.47 14.31,6.88 13.19,6.63L12.75,4H11.25L10.81,6.63C9.69,6.88 8.69,7.47 7.94,8.29L5.44,7.35L4.69,8.65L6.75,10.35C6.59,10.87 6.5,11.43 6.5,12M12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5M12,10.5A1.5,1.5 0 0,0 10.5,12A1.5,1.5 0 0,0 12,13.5A1.5,1.5 0 0,0 13.5,12A1.5,1.5 0 0,0 12,10.5Z" />
</svg> Settings</li>
    </ul>
    <p class="sidebar heading">Your Playlists</p>
    <ul>
      <li>Old Days</li>
      <li>Mood Boosters</li>
      <li>Folk</li>
    </ul>
    <p class="sidebar heading">Collections</p>
    <ul>
      <li>Saxify</li>
      <li>Karbon</li>
      <li>Animals</li>
    </ul>
  </div>
  <div class="main">
    <div class="header-albums">
      <div class="album">
        <img src="https://cdn.pastemagazine.com/www/system/images/photo_albums/album-covers/large/album4chanceacidrap.jpg?1384968217" class="album-cover"/>
        <p class="track-name">Acid Rap</p>
        <p class="track-type">Hip Hop</p>
      </div>
      <div class="album">
        <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Milo_greene_album.jpg" class="album-cover"/>
        <p class="track-name">What's The Matter</p>
        <p class="track-type">Folk</p>
      </div>
      <div class="album">
        <img src="http://www.brockportstylus.org/content/images//Lukas%20copy.jpg" class="album-cover"/>
        <p class="track-name">Love Someone</p>
        <p class="track-type">Pop</p>
      </div>
      <div class="album">
        <img src="http://cdn.albumoftheyear.org/album/130277-the-man-who-has-everything.jpg" class="album-cover"/>
        <p class="track-name">The Man Who Has Everything</p>
        <p class="track-type">Hip Hop</p>
      </div>
      <div class="album">
        <img src="https://cdn.pastemagazine.com/www/system/images/photo_albums/best-album-covers-of-2010/large/photo_27692_0-20.jpg?1384968217" class="album-cover"/>
        <p class="track-name">20 Feet Tall</p>
        <p class="track-type">Hip Hop</p>
      </div>
    </div>
    <div class="tracks">
      <div class="for-you">
        <h3>Tracks For You</h3>
        <div class="single-track">
          <img class="image" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Yellow_cover_art.JPG/220px-Yellow_cover_art.JPG"/>
          <p class="name">Yellow</p>
          <p class="artist">Cold Play</p>
          <p class="time">3:25</p>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="single-track">
          <img class="image" src="https://images.unsplash.com/photo-1496777208258-f3351313183a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"/>
          <p class="name">See The Stars</p>
          <p class="artist">Maria</p>
          <p class="time">4:05</p>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="single-track">
          <img class="image" src="https://images.unsplash.com/photo-1546930722-a1292ed9dee8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=948&q=80"/>
          <p class="name">Winter Night</p>
          <p class="artist">Fresia</p>
          <p class="time">4:20</p>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="single-track">
          <img class="image" src="https://images.unsplash.com/photo-1544036261-f15767f4ae45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"/>
          <p class="name">Mountains</p>
          <p class="artist">Billy Jones</p>
          <p class="time">3:50</p>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
      </div>
      <div class="history">
        <h3>Listening History</h3>
        <div class="history-track">
          <img class="cover" src="https://images.unsplash.com/photo-1550778855-5ecead646de7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=556&q=80"/>
          <div>
            <p class="name">Good Girl</p>
            <p class="artist">Dustin Lynch</p>
          </div>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="history-track">
          <img class="cover" src="https://images.unsplash.com/photo-1485001564903-56e6a54d46ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"/>
          <div>
            <p class="name">What About Us</p>
            <p class="artist">Sunny</p>
          </div>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="history-track">
          <img class="cover" src="https://images.unsplash.com/photo-1496212870378-a622f7c7cafb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"/>
          <div>
            <p class="name">Dark Days</p>
            <p class="artist">Gilbert Freed</p>
          </div>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
        <div class="history-track">
          <img class="cover" src="https://images.unsplash.com/photo-1484330427105-e9002a08eb66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1903&q=80"/>
          <div>
            <p class="name">Sixteen</p>
            <p class="artist">Emancee</p>
          </div>
          <div class="play-button">
            <svg style="width:15px;height:15px" viewBox="0 0 24 24">
              <path fill="#ffffff" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
          </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="right-sidebar">
    
  </div>
</div>
    </div>
@endsection

