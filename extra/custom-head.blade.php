<style>
@font-face {
  font-family: "Ravenscroft";
  src: url("https://res.cloudinary.com/gvissing/raw/upload/v1666270278/fonts/Ravenscroft_dtqk9f.ttf") format("truetype");
}
.ghost .four {
  animation: float 3s -5s ease-in-out infinite backwards;
}
.ghost .six {
  animation: float 3s -3s ease-in-out infinite backwards;
}

@keyframes float {
  50% {
    transform: translateY(-20px);
  }
}
body {
  height: 100vh;
  margin: 0;
  display: grid;
  place-items: center;
  background: #131811;
  background: radial-gradient(circle, #131811 50%, black 100%);
  overflow: hidden;
}

.grave {
  height: 200px;
  width: 150px;
  background-color: #666;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
}
.grave span {
  width: 100%;
  display: block;
  text-align: center;
  font-size: 5em;
  margin-top: 0.25em;
  letter-spacing: 3px;
  font-family: "Ravenscroft";
}

.ghost {
  position: absolute;
  bottom: 0;
  left: 0;
}

.hide {
  display: none;
}

#Objects {
  width: 60%;
}
</style>