<?php
include_once "header.php";
?>
<div class="cover-container d-flex mx-auto flex-column">
<div class="middletext">
  <h1 class="title">Thijs Herman</h1>
  <p class="lead">This website is made for my personal projects. Everything is still in development. If you're looking
    for a web developer or if you want to host any server please contact me at the <a href="contact"
      class="url-normal">contact</a> page :).</p>
  <p class="lead">
    <a href="#my-projects" class="btn btn-lg btn-outline-light">Learn More</a>
  </p>
</div>
</div>
<section class="banner-news">
<div class="news-section container">
    <h6 id="news-text">New website design.</h6>
  </div>
</section>
<section class="banner-1">
  <div class="section-div container">
    <div class="row">
      <div class="col-md-6">
        <h2 id="my-projects" class="h1">My Projects</h2>
        <hr class="hr line-2">
        <p class="banner-1-text">My name is Thijs Herman, and I am a web developer.
          I've made many projects that can be useful for me or for other people. I am always trying to push
          myself and make new discoveries of the things I can build or make. Most of my projects are
          open-source and can be found on my Github page.
        </p>
      </div>
      <span class="image-fit col-md-6">
        <a href="https://github.com/Turbootzz">
          <img class="img-fluid rounded" src="assets/img/github.png" alt="Turboot Github Profile">
        </a>
      </span>
    </div>
  </div>
</section>
<section class="banner-2">
  <div class="section-div container">
    <h2 class="h1">How did I start?</h2>
    <hr class="hr line-1">
    <p class="banner-2-text">I've always had interest in doing technical things since I was young.
      It all started when I was 11 years old and I got my dads old PC and I was really into Minecraft
      at the time. So I started a Minecraft server and eventually I started to make Java plugins for it.
      <br><br>When I finished highschool I chose a study for IT network administrator but I didn't really
      like how they were teaching it to us, so I stopped and a year later I started a study for web development.
      <br><br>I've also built my own server where I host multiple VMs (see Server Hosting). I still have a lot to learn
      but I am always striving to be better.
    </p>
  </div>
</section>
<section class="banner-3">
  <div class="section-div container">
    <h2 class="h1">My Services</h2>
    <hr class="hr line-center-1">
    <p class="banner-3-text">Hosting various services that you can be a part of.
      <br><br>
      To get your own account, please visit the <a href="contact" class="url-white">
        contact</a> page or message me on Discord: @turboot.
    </p>
    <br>
    <div class="row">
      <div class="col-4 col-12-medium">
        <span class="image-fit">
          <a href="https://cloud.turboot.com" target="_blank">
            <img class="img-fluid rounded border border-success" src="assets/img/turboot-cloud.png" alt="Turboot Cloud">
          </a>
        </span>
        <h3 class="pb-3 turboot-cloud-long">Turboot Cloud</h3>
        <h3 class="turboot-cloud-short">Cloud</h3>
          <button type="button" onclick="window.open('https://cloud.turboot.com','_blank');" class="btn btn-outline-secondary">Click Here</button>
      </div>
      <div class="col-4 col-12-medium">
        <span class="image-fit">
          <a href="https://jelly.turboot.com" target="_blank">
            <img class="img-fluid rounded border border-success" src="assets/img/turboot-jelly.png" alt="Turboot Jelly">
          </a>
        </span>
        <h3 class="pb-3 jellyfin-long">Jelly (Films & Series)</h3>
        <h3 class="jellyfin-short">Jelly</h3>
          <button type="button" onclick="window.open('https://jelly.turboot.com','_blank');" class="btn btn-outline-secondary">Click Here</button>
      </div>
      <div class="col-4 col-12-medium">
        <span class="image-fit">
          <a href="servers">
            <img class="img-fluid rounded border border-success" src="assets/img/turboot-hosting.png" alt="Turboot Hosting">
          </a>
        </span>
        <h3 class="pb-3">Hosting</h3>
          <button type="button" onclick="location.href='servers';" class="btn btn-outline-secondary">Click Here</button>
      </div>
    </div>
  </div>
</section>
<section class="banner-4">
  <div class="section-div container">
    <h2 class="h1">Turboot</h2>
    <hr class="hr line-center-2">
    <br>
  </div>
</section>
<?php
include_once "footer.php";
?>