<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Navbar</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        * {
            margin: 0;
            padding: 0;
          }

          body {
            font-family: 'Montserrat', 'Inter';
          }

        a {
          color: #fff;
          text-decoration: none;
          transition: 0.3s;
        }

        a:hover {
          opacity: 0.7;
        }

        .espaco_logo img {
          width: 100px;
            height: auto;
        }
        nav {
          display: flex;
          justify-content: space-around;
          align-items: center;
          background: #161D53;
          height: 8vh;
        }

        main {
          background: url("bg.jpg") no-repeat center center;
          background-size: cover;
          height: 12vh;
        }

        .nav-list {
          list-style: none;
          display: flex;
        }

        .nav-list li {
          letter-spacing: 3px;
          margin-left: 32px;

        }

        .mobile-menu {
          display: none;
          cursor: pointer;
        }

        .mobile-menu div {
          width: 32px;
          height: 2px;
          background: #fff;
          margin: 8px;
          transition: 0.3s;
        }

        .acoes {
          display: flex;
        }
        .acoes i {
          color: #fff;
        }
        .acoes .btnLogin{
          padding: 17px;
        }
        .acoes .btnLogin button{
          color: #fff;
          width: 80px;
          height: auto;
          background-color: #161D53;
          border: #fff 2px solid;
          margin-left: 3px;
          font-size: 16px;
          font-family: 'Montserrat', 'Inter';
        }
        .acoes .busca {
          padding: 17px;
        }
        .acoes .perfil {
          padding: 17px;
        }
        @media (max-width: 999px) {
          body {
            overflow-x: hidden;
          }
          .nav-list {
            position: absolute;
            top: 8vh;
            right: 0;
            width: 50vw;
            height: 92vh;
            background: #161D53;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            transform: translateX(100%);
            transition: transform 0.3s ease-in;
          }
          .nav-list li {
            margin-left: 0;
            opacity: 0;
          }
          .mobile-menu {
            display: block;
          }
        }

        .nav-list.active {
          transform: translateX(0);
        }

        @keyframes navLinkFade {
          from {
            opacity: 0;
            transform: translateX(50px);
          }
          to {
            opacity: 1;
            transform: translateX(0);
          }
        }

        .mobile-menu.active .line1 {
          transform: rotate(-45deg) translate(-8px, 8px);
        }

        .mobile-menu.active .line2 {
          opacity: 0;
        }

        .mobile-menu.active .line3 {
          transform: rotate(45deg) translate(-5px, -7px);
        }
    </style>
  </head>

  <body>
    <section class="espaco_logo">
      <img src="images/logoEscura.png" alt="Clínica Higia">
    </section>
    <header>
      <nav>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="#">Agenda</a></li>
          <li><a href="#">Resultados</a></li>
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Sobre nós</a></li>
        </ul>
        <div class="acoes">
          <a href="logout.php">
            <div class="btnLogin">
              <button>
                Sair
                <i class="fa-solid fa-right-from-bracket"></i>
              </button>
            </div>
          </a>
          <a href="#">
            <div class="busca">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </a>
          <a href="#">
            <div class="perfil">
              <i class="fa-regular fa-user"></i>
            </div>
          </a>
        </div>
      </nav>
    </header>
    <main></main>
    <script>
        class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
);
mobileNavbar.init();
    </script>
  </body>
</html>