<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Kitchen Sink</title>

  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Canonical -->
  <link rel="canonical" href="#">

  <!-- Prefetch external asset dns -->
  <link rel="dns-prefetch" href="#">

  <!-- Prefetch internal image assets -->
  <link rel="prefetch" href="#">

  <link rel="stylesheet" href="static/css/screen.css" media="screen">

  <script src="static/lib/modernizr.js"></script>

  <link rel="shortcut icon" href="touch-icon.png">
  <link rel="apple-touch-icon-precomposed" href="touch-icon.png">

  <?php require_once 'includes/head.php'; ?>

</head>

<body>

  <?php require_once 'includes/header.php'; ?>

  <div class="row group">
    <main class="main group" role="main">

      <section class="hero">
        <header class="section-header">
          <h1>Hero Image</h1>
        </header>
        <img src="static/images/placeholder-wide.png" alt="">
        <div class="hero-caption">
          <h2>Caption</h2>
          <p>More <a href="#">information</a> can go here</p>
        </div>

      </section>

      <section class="typography-and-brand group">
        <header class="section-header">
          <h1>Typography and Branding</h1>
        </header>

        <article class="brand colours group">
          <h2>Colours</h2>
          <ul>
          <li class="primary">Brand Primary</li>
          <li class="secondary">Brand Secondary</li>
          <li class="tertiary">Brand Tertiary</li>
          <li class="error">Brand Error</li>
          <li class="hightlight">Brand Focus</li>
          </ul>
        </article>

        <article class="typogrpahy sans group">
          <h2>Sans Typeface</h2>
          <p>Aa Bb Cc Dd Ee Fe Gg Hh Ii Jj Kk Ll Mn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
          <p>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
          <p>a b c d e f g h i j k l m n o p q r s t u v w x y z</p>
          <p>0 1 2 3 4 5 6 7 8 9</p>
          <p>:// @ _ - "" '' ! ? ~ % &amp; () []</p>
        </article>

        <article class="typogrpahy serif">
          <h2>Serif Typeface</h2>
          <p>Aa Bb Cc Dd Ee Fe Gg Hh Ii Jj Kk Ll Mn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
          <p>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
          <p>a b c d e f g h i j k l m n o p q r s t u v w x y z</p>
          <p>0 1 2 3 4 5 6 7 8 9</p>
          <p>:// @ _ - "" '' ! ? ~ % &amp; () []</p>
        </article>

      </section>

      <section class="content-and-sidebar group">

        <header class="section-header">
          <h1>Content and Sidebar</h1>
        </header>

        <article class="main-content rich-text">
          <h2>Elephant Man</h2>
          <p>I know lying is wrong, but if the elephant man came in now in a blouse with some make up on, and said "how do I look?" Would you say — bearing in mind he's depressed and has respiratory problems — would you say "go and take that blusher off you mis-shapen headed elephant tranny"? No. You'd say "You look nice...John"</p>
          <h3>Minor criticism</h3>
          <p>Minor criticism. I like to keep a bit more distance between the egg and the beans. I may want to mix them but that's my decision. Use the sausage as a breakwater...but that's nitpicking, on the whole a very good effort...Seven on ten. Let's make love.</p>
        </article>

        <aside class="sidebar" role="complementary">
          <h3>Sidebar</h3>
          <p></p>
          <ul>
            <li><a href="#">Complementary Link 1</a></li>
            <li><a href="#">Complementary Link 2</a></li>
            <li><a href="#">Complementary Link 3</a></li>
            <li><a href="#">Complementary Link 4</a></li>
          </ul>
        </aside>

      </section>

      <section class="tabs">

        <header class="section-header">
          <h1>Tabs</h1>
        </header>

        <ul>
          <li><a href="#tab-one" aria-controls="tab-one" aria-expanded="true">Tab One</a></li>
          <li><a href="#tab-two" aria-controls="tab-two" aria-expanded="false">Tab Two</a></li>
        </ul>

        <div class="tab" id="tab-one" aria-hidden="false">
          <p>We managed to rectify it, though, because it now says, by adapting it, "Cook" where it once said "Cock", and it says "Pass" now where it once said "Piss", so it’s slightly less rude.</p>
        </div>

        <div class="tab" id="tab-two" aria-hidden="true">
          <p>Minor criticism. I like to keep a bit more distance between the egg and the beans. I may want to mix them but that's my decision. Use the sausage as a breakwater...but that's nitpicking, on the whole a very good effort...Seven on ten. Let's make love.</p>
        </div>

      </section>

      <section class="typography">
        <header class="section-header">
          <h1>Typography</h1>
        </header>

        <article>
          <h1>Heading Level 1</h1>
          <h2>Heading Level 2</h2>
          <h3>Heading Level 3</h3>
          <h4>Heading Level 4</h4>
          <h5>Heading Level 5</h5>
          <h6>Heading Level 6</h6>

          <p>I know lying is wrong, but if the elephant man came in now in a blouse with some make up on, and said "how do I look?" Would you say — bearing in mind he's depressed and has respiratory problems — would you say "go and take that blusher off you mis-shapen headed elephant tranny"? No. You'd say "You look nice...John"</p>

          <blockquote>
            <p>He's not a criminal, but he will, perhaps, travel 80mph on the motorway if he, for example, he wants to get somewhere quickly...</p>
            <cite>Alan Partridge</cite>
          </blockquote>

          <ul>
            <li>Tom</li>
            <li>Dick
              <ul>
                <li>Richard</li>
                <li>Rich</li>
                <li>Richie</li>
              </ul>
            </li>
            <li>Harry</li>
          </ul>

          <ol>
            <li>Tom</li>
            <li>Dick
              <ol>
                <li>Richard</li>
                <li>Rich</li>
                <li>Richie</li>
              </ol>
            </li>
            <li>Harry</li>
          </ol>

          <hr>

          <h1>Temperature</h1>
          <p>The temperature inside this apple pie is over one thousand degrees. If I squeeze it, a jet of molten bramley apple will squirt out. Could go your way; could go mine. Either way, one of us is going down.</p>
          <h2>Oooh scary</h2>
          <p>Oooh scary Irish men. Would you like to recruit me? I like your berets. They're worn by Saddam Hussain, Frank Spencer, the French.</p>
          <div class="post-image alignleft"><img src="static/images/placeholder-rectangle.png" alt=""></div>
          <h3>Minor criticism</h3>
          <p>Minor criticism. I like to keep a bit more distance between the egg and the beans. I may want to mix them but that's my decision. Use the sausage as a breakwater....but that's nitpicking, on the whole a very good effort...Seven on ten. Let's make love.</p>
          <h4>Go to London</h4>
          <p>Go to London, I guarantee you'll either be mugged or not appreciated. Catch the train to London, stopping at Rejection, Disappointment, Backstabbing Central and Shattered Dreams Parkway.</p>
          <h5>Lying</h5>
          <p>I know lying is wrong, but if the elephant man came in now in a blouse with some make up on, and said 'How do I look?' Would you say, bearing in mind he's depressed and has respiratory problems, would you say <div class="post-image alignright"><img src="static/images/placeholder-rectangle-blue.png" alt=""></div>'Go and take that blusher off you mis-shapened elephant tranny'? No. You'd say 'You look nice... John'.</p>
          <h6>Quick tip</h6>
          <p>Quick tip for yourself. If you're ever doing an after-dinner speech, you say 'My Lords, Ladies and Gentlemen, sorry I'm late, I just popped to the toilet. And while I was there, I saw some graffiti and it said 'I used to be indecisive, but now I'm not so sure.' Straight away you've got them by the jaffas.</p>

        </article>

      </section>

      <section class="blocks">
        <header class="section-header">
          <h1>Blocks</h1>
        </header>
        <div class="thing block">
          <h3>Apple Pie</h3>
          <p>The temperature inside this apple pie is over one thousand degrees.</p>
          <button class="button cta">Action</button>
        </div>
        <div class="something block">
          <h3>Beans</h3>
          <p>I like to keep a bit more distance between the egg and the beans.</p>
          <button class="button cta">Action</button>
        </div>

      </section>

      <section class="video">

        <header class="section-header">
          <h1>Video</h1>
        </header>

        <h2>Vimeo</h2>

        <div class="video-frame">
          <iframe src="https://player.vimeo.com/video/123716203" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>

        <h2>YouTube</h2>

        <div class="video-frame">
          <iframe src="https://www.youtube.com/embed/zUNrUqMwUkY" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>

      </section>

      <section class="tablular-data">

        <header class="section-header">
          <h1>Tabular Data</h1>
        </header>

        <table>
          <caption>The Best Victoria Sponge</caption>
          <colgroup>
            <col style=""></col>
            <col style=""></col>
            <col style=""></col>
          </colgroup>
          <thead>
            <tr>
              <th scope="col">Ingredients</th><th scope="col">Serves Four</th><th scope="col">Serves More</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Caster Sugar</td><td>200g</td><td>400g</td>
            </tr>
            <tr>
              <td>Softened Butter</td><td>200g</td><td>400g</td>
            </tr>
            <tr>
              <td>Eggs - Beaten</td><td>4</td><td>8</td>
            </tr>
            <tr>
              <td>Self-raising Flour</td><td>200g</td><td>400g</td>
            </tr>
            <tr>
              <td>Baking Powder</td><td>1 <abbr title="Tea Spoon">tsp</abbr></td><td>2 tsp</td>
            </tr>
            <tr>
              <td>Milk</td><td>2 tbsp</td><td>4 tbsp</td>
            </tr>
          </tbody>
        </table>

      </section>

      <section class="the-grid">
        <header class="section-header">
          <h1>The Grid</h1>
        </header>

        <section class="grid group">
          <div class="column-full"></div>
        </section>

        <section class="grid group">
          <div class="column-half"></div>
          <div class="column-half"></div>
        </section>

        <section class="grid group">
          <div class="column-third"></div>
          <div class="column-third"></div>
          <div class="column-third"></div>
        </section>

        <section class="grid group">
          <div class="column-two-thirds"></div>
          <div class="column-third"></div>
        </section>

        <section class="grid group">
          <div class="column-quarter"></div>
          <div class="column-quarter"></div>
          <div class="column-quarter"></div>
          <div class="column-quarter"></div>
        </section>

        <section class="grid group">
          <div class="column-quarter"></div>
          <div class="column-three-quaters"></div>
        </section>

        <section class="grid group">
          <div class="column-fifth"></div>
          <div class="column-fifth"></div>
          <div class="column-fifth"></div>
          <div class="column-fifth"></div>
          <div class="column-fifth"></div>
        </section>

        <section class="grid group">
          <div class="column-two-fiths"></div>
          <div class="column-three-fiths"></div>
        </section>

        <section class="grid group">
          <div class="column-fifth"></div>
          <div class="column-four-fiths"></div>
        </section>

      </section>

      <section class="forms">

        <header class="section-header">
          <h1>Forms</h1>
          <!-- note that we're not using placeholder attributes since they aren't especially accessible -->
        </header>

        <form class="data-collection" action="">
          <div class="form-group">
            <label for="text-input">Label for Text <span class="required">Required</span>
              <em class="hint">Hint text for the input below</em>
            </label>
            <input type="text" name="text-input">
          </div>

          <div class="form-group form-error">
            <label for="text-input">Label for Error <span class="error-msg">This is required</span></label>
            <input type="text" name="text-input">
          </div>

          <div class="form-group">
            <label for="search-input">Label for Search</label>
            <input type="search" name="search-input">
          </div>

          <div class="form-group">
            <label for="phone-input">Label for Phone</label>
            <input type="phone" name="phone-input">
          </div>

          <div class="form-group">
            <label for="email-input">Label for Email</label>
            <input type="email" name="email-input" autocapitalize="none">
          </div>

          <div class="form-group">
            <label for="password-input">Label for Password</label>
            <input type="password" name="password-input">
          </div>

          <div class="form-group">
            <label for="file-input">Label for File</label>
            <input type="file" name="file-input">
          </div>

          <div class="form-group">
            <label for="textarea">Label for Textarea</label>
            <textarea type="textarea" rows="10" cols="80"></textarea>
          </div>

          <!-- Remember that radios and checkboxes probably need a legend element for context, so use a fieldset inside the containing "form-group" element -->

          <div class="form-group">
            <fieldset class="inline-labels">
              <legend>Do you live here?</legend>
              <label for="radio-one" class="radio-group" role="radio">
                <input type="radio" id="radio-one" name="radio-inline-group" value="Yes">
                Yes
              </label>
              <label for="radio-two" class="radio-group" role="radio">
                <input type="radio" id="radio-two" name="radio-inline-group" value="No">
                No
              </label>
            </fieldset>
          </div>

          <div class="form-group">
            <fieldset class="block-labels">
              <legend>Pick one type of sweet treat</legend>
              <label for="radio-brownies" class="radio-group" role="radio">
                <input type="radio" id="radio-brownies" name="radio-block-group" value="Brownie">
                Peanut butter and dark chocolate brownies
              </label>
              <label for="radio-flapjacks" class="radio-group" role="radio">
                <input type="radio" id="radio-flapjacks" name="radio-block-group" value="flapjack">
                Sultana and nut flapjacks
              </label>
              <label for="radio-fingers" class="radio-group" role="radio">
                <input type="radio" id="radio-fingers" name="radio-block-group" value="sponge">
                Sponge fingers
              </label>
            </fieldset>
          </div>

          <div class="form-group">
            <fieldset class="inline-labels">
              <legend>Cake or tea or both?</legend>
              <label for="checkbox-one" class="checkbox-group">
                <input type="checkbox" id="checkbox-one" name="checkbox-inline-group" value="I like cake">
                I like cake
              </label>
              <label for="checkbox-two" class="checkbox-group">
                <input type="checkbox" id="checkbox-two" name="checkbox-inline-group" value="I like tea">
                I like tea
              </label>
            </fieldset>
          </div>

          <div class="form-group">
            <fieldset class="block-labels">
              <legend>Favourite thing to do on a Sunday?</legend>
              <label for="checkbox-walks" class="checkbox-group">
                <input type="checkbox" id="checkbox-walks" name="checkbox-block-group" value="I like long walks in the country">
                I like long walks in the country
              </label>
              <label for="checkbox-fire" class="checkbox-group">
                <input type="checkbox" id="checkbox-fire" name="checkbox-block-group" value="I like a cosy pub with a roaring log fire">
                I like a cosy pub with a roaring log fire
              </label>
              <label for="checkbox-roast" class="checkbox-group">
                <input type="checkbox" id="checkbox-roast" name="checkbox-block-group" value="I like a roast dinner with all the trimmings and a pint of IPA">
                I like a roast dinner with all the trimmings and a pint of IPA
              </label>
            </fieldset>
          </div>

          <div class="form-buttons">
            <input type="submit" value="Submit" class="button button-submit">
            <input type="reset" value="Reset" class="button button-reset">
            <input type="button" value="Button (Disabled)" class="button button-disabled" disabled="disabled">
            <button class="button">Button</button>
          </div>
        </form>

      </section>

      <section class="triangles">
        <header class="section-header">
          <h1>Triangles</h1>
        </header>
        <div class="triangle-up"></div>
        <div class="triangle-down"></div>

      </section>

  </main>

</div>

<aside class="sidebar" role="complementary"></aside>

<?php require_once 'includes/footer.php'; ?>

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="static/lib/jquery.min.js"><\/script>')</script>
<script src="static/js/plugins.min.js"></script>
<script src="static/js/main.min.js"></script>

</html>