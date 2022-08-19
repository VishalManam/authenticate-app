<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="keywords"
      content="html css bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples"
    />
    <meta
      name="description"
      content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5"
    />

    <title>
      Demo Page
    </title>

    <link
      href="bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
          if (window.scrollY > 50) {
            document.getElementById("navbar_top").classList.add("fixed-top");
            // add padding top to show content behind navbar
            navbar_height = document.querySelector(".navbar").offsetHeight;
            document.body.style.paddingTop = navbar_height + "px";
          } else {
            document.getElementById("navbar_top").classList.remove("fixed-top");
            // remove padding top from body
            document.body.style.paddingTop = "0";
          }
        });
      });
      // DOMContentLoaded  end
    </script>
  </head>
  <body>
    <div class="bg-warning py-3">
      <div class="container">Welcome to this Page</div>
    </div>

    <!-- ============= COMPONENT ============== -->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Hello App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="userpanel/login.php"> Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="userpanel/register.php"> Register </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminpanel/adminlogin.php"> Admin Login </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Dropdown right
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              </ul>
            </li> -->
          </ul>
        </div>
        <!-- navbar-collapse.// -->
      </div>
      <!-- container-fluid.// -->
    </nav>
    <!-- ============= COMPONENT END// ============== -->

    <div class="container" style="max-width: 720px">
      <header class="py-4">
        <h2>Demo page</h2>
      </header>
      <!-- section-header.// -->

      <section>
        <!-- <h6>
          Demo for navbar or header make fixed after scroll <br />
          Based on Bootstrap 5 CSS framework.
        </h6> -->
        <!-- <p>
          For this demo page you should connect to the internet to receive files
          from CDN like Bootstrap5 CSS, Bootstrap5 JS
        </p> -->

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, blanditiis voluptatum. Laboriosam enim eos ab quidem id animi, nam architecto necessitatibus ad fugit omnis blanditiis eum soluta placeat maxime consectetur quos nulla vero consequuntur cum! Perspiciatis repellat molestiae sapiente illum voluptates earum? Minima, corrupti perferendis iusto quod suscipit quae neque, reprehenderit omnis quam harum alias nulla labore placeat hic non. Vero voluptatibus voluptatem consequatur sed culpa maxime laudantium praesentium ipsa officiis quod impedit voluptate, eum, quo ut aperiam iure incidunt necessitatibus accusantium! Reiciendis, aperiam alias nulla non officia ipsum, minima dicta porro velit consectetur ullam autem possimus quis temporibus tenetur saepe nemo consequuntur. Eos eveniet aspernatur voluptatum? Aliquam sunt, quos ex magni at quas quisquam dolore? Aliquam laboriosam porro vero soluta, ullam omnis mollitia saepe aut cupiditate velit unde! Pariatur quos fugiat magnam provident deleniti? Alias earum quibusdam mollitia necessitatibus corporis praesentium doloribus quam culpa, veritatis possimus qui, nisi repellat commodi illo expedita, soluta consectetur temporibus quia iure? Provident praesentium itaque odio sunt, quibusdam, dolorum veritatis enim quaerat natus optio quis illum? Excepturi, nihil illo placeat fugit quaerat mollitia totam, architecto labore reiciendis laborum fuga sapiente esse repellendus voluptates tempore. Iure totam rerum deleniti nesciunt, et ducimus blanditiis, repellat at soluta similique, ullam eos laborum. Eligendi distinctio voluptatum fugit a, nisi sapiente minima aperiam, quidem voluptate, molestiae dicta deserunt? Excepturi nostrum perspiciatis quaerat officiis. Esse nostrum sit optio consequuntur repellat maxime, accusamus nihil? Nihil magni distinctio quam in repellendus accusamus necessitatibus, illo iste. Porro odio, deleniti laudantium, dolorum libero saepe ipsa ducimus totam corporis harum nesciunt iusto perspiciatis obcaecati laborum exercitationem quibusdam minus corrupti eum eveniet at dolores expedita? Est eos placeat ut ab minus sint labore delectus quaerat laudantium cupiditate, dicta perspiciatis maxime quam explicabo nobis omnis voluptate? Repudiandae sequi eaque perspiciatis est porro neque veniam eius aperiam accusantium eos rem dolorum eveniet possimus dignissimos exercitationem, accusamus a error praesentium non nisi quaerat harum alias eum impedit. Voluptas ipsum vitae corporis delectus corrupti consequuntur qui aliquam molestias vel animi mollitia distinctio officia quaerat assumenda nemo natus alias, nesciunt facilis. Facilis perferendis quo accusantium architecto dolores unde placeat ratione laborum in eveniet, accusamus fugit quam? Fugit, tenetur excepturi eaque velit animi neque consequuntur? Error odit rerum aut! Nesciunt iusto vitae quibusdam eos libero expedita aliquid impedit officia? Vel aliquid rem, voluptates illum voluptas inventore accusantium neque fugit magni ipsa doloremque, libero incidunt nulla eveniet cum nostrum? Est voluptatem maxime consequuntur.
        </p>

        <!-- <a
          href="http://bootstrap-menu.com/detail-fixed-onscroll.html"
          class="btn btn-success"
        >
          &laquo; Back to tutorial or Download code</a
        > -->
        <br /><br />
      </section>
    </div>
    <!-- container //  -->
  </body>
</html>
