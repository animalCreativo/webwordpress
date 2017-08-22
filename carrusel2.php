<div class="row">
  <div class="columns">
    <h2>Orbit - Disabling Animation</h2>
    <p>To disable Motion UI, set the plugin option <code>useMUI</code> to <code>false</code>. Written as an HTML attribute, that's <code>data-use-m-u-i="false"</code>.</p>
  </div>
</div>

<div class="row">
  <div class="columns">
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-use-m-u-i="false">
      <ul class="orbit-container" id="rata">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="is-active orbit-slide">
          <img class="orbit-image" src="//foundation.zurb.com/sites/docs/assets/img/orbit/01.jpg" alt="Space">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="//foundation.zurb.com/sites/docs/assets/img/orbit/02.jpg" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="//foundation.zurb.com/sites/docs/assets/img/orbit/03.jpg" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="//foundation.zurb.com/sites/docs/assets/img/orbit/04.jpg" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </li>
      </ul>
      <nav class="orbit-bullets">
       <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
       <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
       <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
       <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
     </nav>
    </div>
  </div>
</div>
