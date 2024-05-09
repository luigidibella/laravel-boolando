<header>
    <div class="container">
      <nav>
        <ul>
          <li
            v-for="(item, index) in mainMenu"
            :key="`m-${index}`"
          >
            <a :href="item.href">{{ item.text }}</a>
          </li>
          <!-- <li><a href="#">Donna</a></li>
          <li><a href="#">Uomo</a></li>
          <li><a href="#">Bambini</a></li> -->
        </ul>
      </nav>
      <div class="logo">
        <img src="/img/boolean-logo.png" alt="logo">
      </div>
      <nav>
        <ul>
          <li
            v-for="(item, index) in socialMenu"
            :key="`s-${index}`"
          >
            <a :href="item.href" v-html="item.text"></a>
          </li>
          <!-- <li><a href="#"><i class="fa-regular fa-user"></i></a></li>
          <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
          <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
        </ul>
      </nav>
    </div>
  </header>
