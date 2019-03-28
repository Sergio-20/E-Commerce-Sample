<?php
  include "header.php";
 ?>

<main onload="sortColor();sortPrice();sortSize();sortType();">

  <div class='container-fluid'>

    <div class='row'>

      <aside class='btn text-light col-sm-4'>

        <section class='item-type'>
          <h3>What are you looking for?</h3>
          <br>
          <form action='' method='post'>
            <div>
                <ul id='bottoms'><h2 class='btn btn-success'>Bottoms</h2>
                  <li><input id='pants' type='radio' name='type' value='pants'/>
                  <label for='type'>Pants</label></li>

                  <li><input id='shorts' type='radio' name='type' value='shorts'/>
                  <label for='type'>Shorts</label></li>

                  <li><input id='sweatpants' type='radio' name='type' value='sweatpants'/>
                  <label for='type'>Sweatpants</label></li>
                </ul>

            </div>
            <br>
            <div>
              <ul id="tops"><h2 class="btn btn-success">Tops</h2>
                <li><input id='t-shirts' type='radio' name='type' value='t-shirts'/>
                <label for='type'>T-Shirts</label></li>

                <li><input id='sweaters' type='radio' name='type' value='sweaters'/>
                <label for='type'>Sweaters</label></li>

                <li><input id='jackets' type='radio' name='type' value='jackets'/>
                <label for='type'>Jackets</label></li>

              </ul>
            </div>
          <br>
            <div>
              <ul id="shoes"><h2 class="btn btn-success">Shoes</h2>
                <br><br>
                <ul><h2 class="btn aqua-gradient">Casual/Comfort</h2>
                  <li><input id='basketball' type='radio' name='type' value='basketball'/>
                  <label for='type'>Casual</label></li>

                  <li><input id='football' type='radio' name='type' value='football'/>
                  <label for='type'>Comfort</label></li>

                  <li><input id='running' type='radio' name='type' value='running'/>
                  <label for='type'>Slip-Ons</label></li>

                  <li><input id='soccer' type='radio' name='type' value='soccer'/>
                  <label for='type'>Sneakers</label></li>
                </ul>

                <ul><h2 class="btn aqua-gradient">Athletic/Sports</h2>
                  <li><input id='basketball' type='radio' name='type' value='basketball'/>
                  <label for='type'>Basketball</label></li>

                  <li><input id='football' type='radio' name='type' value='football'/>
                  <label for='type'>Football</label></li>

                  <li><input id='running' type='radio' name='type' value='running'/>
                  <label for='type'>Running</label></li>

                  <li><input id='soccer' type='radio' name='type' value='soccer'/>
                  <label for='type'>Soccer</label></li>
                </ul>
              </ul>
            </div>
          <br>
          </form>
        </section>

        <section class='item-size'>
          <h3>And in what size...?</h3>
          <br>
          <form action='' method='post'>
            <div class="btn btn-success">
              <input id='extra-small' type='radio' name='size' value='xs'/>
              <label for='size'>X-Small</label>
            </div>
            <br>
            <div class="btn btn-success">
              <input id='small' type='radio' name='size' value='small'/>
              <label for='size'>Small</label>
            </div>
            <br>
            <div class="btn btn-success">
              <input id='medium' type='radio' name='size' value='medium'/>
              <label for='size'>Medium</label>
            </div>
            <br>
            <div class="btn btn-success">
              <input id='large' type='radio' name='size' value='large'/>
              <label for='size'>Large</label>
            </div>
            <br>
            <div class="btn btn-success">
              <input id='extra-large' type='radio' name='size' value='xl'/>
              <label for='size'>X-Large</label>
            </div>
          </form>
        </section>

        <br><br>

        <section class='item-price'>
          <h3>Okay, and what price range?</h3>
          <br>
          <form action='' method='post'>
            <div>
              <!--Add $ as soon as client types values.-->
              <input id='min-price' type='text' name='min-price' placeholder='min'/>
              <br><br>
              <input id='max-price' type='text' name='max-price' placeholder='max'/>
              <br><br>
              <button class='btn aqua-gradient' type='submit'>Make Changes</button>
            </div>
            <br>
          </form>
        </section>

        <section class='item-color'>
          <h3>Lastly, in what flavor?</h3>
          <br>
          <form action='' method='post'>
          <div class="btn ripe-malinka-gradient">
            <input id='red' type='radio' name='color' value='red'/>
            <label for='color'>Red</label>
          </div>
          <br>
          <div class="btn blue-gradient">
            <input id='blue' type='radio' name='color' value='blue'/>
            <label for='color'>Blue</label>
          </div>
          <br>
          <div class="btn dusty-grass-gradient">
            <input id='green' type='radio' name='color' value='green'/>
            <label for='color'>Green</label>
          </div>
          <br><br>
          <input class='btn aqua-gradient' type='submit' value='Update Changes'/>
          </form>
        </section>

      </aside>

    </div>

    <div class="search-img-container">

      <div class='search-results-01 row'>

        <p class='col-sm-5'></p>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>

      </div>

      <div class='search-results-02 row'>

        <p class='col-sm-5'></p>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>

      </div>

      <div class='search-results-03 row'>

        <p class='col-sm-5'></p>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>

      </div>

      <div class='search-results-04 row'>

        <p class='col-sm-5'></p>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>

      </div>

      <div class='search-results-05 row'>

        <p class='col-sm-5'></p>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>
        <img class='btn col-sm-2' src='https://thumbs.dreamstime.com/z/blank-white-t-shirt-mock-up-grey-background-front-side-view-blank-white-t-shirt-mock-up-grey-background-front-side-view-106854425.jpg' alt='Img'/>

      </div>
      <?php
      mysqli_select_db($connection, "E-Commerce Accounts");

      $query = $_POST["search-bar"];

      if(isset($_POST["search-bar"]))
      {
        $query = preg_replace("#[^0-9a-z ]#i", "", $query);

        $itemQuery = mysqli_query( $connection, " SELECT description FROM items WHERE description LIKE '%$query%' ");
        $count = mysqli_num_rows($itemQuery);

        if($count == 0)
        {
          $query = "";
        }
        else
        {
          $tops = array("top", "tops", "shirt", "shirts", "jacket", "jackets", "hoodie", "hoodies", "sweater", "sweaters");
          $bottoms = array("pants", "shorts", "sweatpants");

          /**Bottoms**/
          if( $query == $bottoms[0] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                images[i].src = 'https://thumbs.dreamstime.com/z/red-skinny-high-waist-jeans-pants-isolated-white-background-women%C3%A2%E2%82%AC%E2%84%A2s-87956891.jpg';
              }
            }
            changeImage();

            </script>
            ";
          }

          else if( $query == $bottoms[1] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                images[i].src = 'https://thumbs.dreamstime.com/z/red-child-pants-close-up-front-view-chino-isolated-white-background-54719542.jpg';
              }
            }
            changeImage();

            </script>
            ";
          }

          if( $query == $bottoms[2] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                images[i].src = 'https://thumbs.dreamstime.com/z/sport-sweatpants-isolated-white-background-44275880.jpg';
              }
            }
            changeImage();

            </script>
            ";
          }

          /**Tops**/
          else if( $query == $tops[0] || $query == $tops[1] || $query == $tops[2] || $query == $tops[3] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                  images[i].src = 'https://thumbs.dreamstime.com/z/red-polo-shirt-clothes-isolated-white-background-88747852.jpg';
              }
            }
            changeImage();

            </script>
            ";
          }

          else if( $query == $tops[4] || $query == $tops[5] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                images[i].src = 'https://thumbs.dreamstime.com/z/red-jacket-28286300.jpg';
              }
            }
            changeImage();

            </script>
            ";
          }
          else if( $query == $tops[6] || $query == $tops[7] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                if(i % 2 == 0)
                {
                  images[i].src = 'https://thumbs.dreamstime.com/z/red-hoodie-sweatshirt-mockup-isolated-white-background-91932637.jpg';
                }
                else
                {
                  images[i].src = 'https://thumbs.dreamstime.com/z/red-hoodie-sweatshirt-mockup-isolated-white-background-91929838.jpg';
                }
              }
            }
            changeImage();

            </script>
            ";
          }

          else if( $query == $tops[8] || $query == $tops[9] )
          {
            echo
            "
            <script>

            function changeImage()
            {
              let images = document.querySelectorAll('div img');
              for(let i = 0; i < images.length; i++)
              {
                if(i % 2 == 0)
                {
                  images[i].src = 'https://thumbs.dreamstime.com/z/red-sweater-isolated-white-31275518.jpg';
                }
                else
                {
                  images[i].src = 'https://thumbs.dreamstime.com/z/red-knitted-sweater-isolated-white-36108957.jpg';
                }
              }
            }
            changeImage();

            </script>
            ";
          }

          else
          {
            echo "<script>alert('No matches found...');</script>";
          }
        }

      }
       ?>

      <div class='page-numbers'>
        <label><i class='fas fa-chevron-left'></i></label>
        <label class='btn purple-gradient'>1</label> <label class='btn aqua-gradient'>2</label> <label class='btn aqua-gradient'>3</label> <label class='btn aqua-gradient'>4</label> <label class='btn aqua-gradient'>5</label>
        <label><i class='fas fa-chevron-right'></i></label>
      </div>

    </div>

  </div>

  <script type="text/javascript" src="../JS/searchResults.js"></script>

</main>

<?php
  include "../PHP/footer.php";
 ?>
