<style type="text/css">
#half-stars-example .rating-group {
  display: flex;
  justify-content: center;
  align-items: center;
}
#half-stars-example .rating__icon {
  pointer-events: none;
}
#half-stars-example .rating__input {
  position: absolute !important;
  left: -9999px !important;
}
#half-stars-example .rating__label {
  cursor: pointer;
  margin: 0;
  padding: 0 0.1em;
  font-size: 2rem;
  min-height: 57.6px;
}
#half-stars-example .rating__label--half {
    padding: 0;
    margin: 0;
    line-height: 0;
    margin-right: -0.4em;
    z-index: 3;
    max-width: 16px !important;
    font-size: 3rem;
}
#half-stars-example .rating__icon--star {
  color: #007bff;
}
#half-stars-example .rating__icon--none {
  color: #eee;
}
#half-stars-example .rating__input--none:checked + .rating__label .rating__icon--none {
  color: red;
}
#half-stars-example .rating__input:checked ~ .rating__label .rating__icon--star {
  color: #ddd;
}
#half-stars-example .rating-group:hover .rating__label .rating__icon--star,
#half-stars-example .rating-group:hover .rating__label--half .rating__icon--star {
  color:  #007bff;
}
#half-stars-example .rating__input:hover ~ .rating__label .rating__icon--star,
#half-stars-example .rating__input:hover ~ .rating__label--half .rating__icon--star {
  color: #ddd;
}
#half-stars-example .rating-group:hover .rating__input--none:not(:hover) + .rating__label .rating__icon--none {
  color: #eee;
}
#half-stars-example .rating__input--none:hover + .rating__label .rating__icon--none {
  color: red;
}
</style>
<div id="half-stars-example" style="margin-left: auto; display: flex; justify-content: center; align-items: flex-end; flex-direction: column;">
    <h3 id="starN" style="padding-right: 10px;">0</h3>
  <div class="rating-group">
     <input class="rating__input rating__input--none" checked="" name="rating2" id="rating0" value="0" type="radio">
     <label aria-label="0 stars" class="rating__label" for="rating0">&nbsp;</label>
     <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating1"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
     <input class="rating__input" name="rating2" id="rating1" value="0.5" type="radio">
     <label aria-label="1 star" class="rating__label" for="rating2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
     <input class="rating__input" name="rating2" id="rating2" value="1" type="radio">
     <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating3"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
     <input class="rating__input" name="rating2" id="rating3" value="1.5" type="radio">
     <label aria-label="2 stars" class="rating__label" for="rating4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
     <input class="rating__input" name="rating2" id="rating4" value="2" type="radio">
     <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating5"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
     <input class="rating__input" name="rating2" id="rating5" value="2.5" type="radio">
     <label aria-label="3 stars" class="rating__label" for="rating6"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
     <input class="rating__input" name="rating2" id="rating6" value="3" type="radio">
     <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating7"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
     <input class="rating__input" name="rating2" id="rating7" value="3.5" type="radio">
     <label aria-label="4 stars" class="rating__label" for="rating8"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
     <input class="rating__input" name="rating2" id="rating8" value="4" type="radio">
     <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating9"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
     <input class="rating__input" name="rating2" id="rating9" value="4.5" type="radio">
     <label aria-label="5 stars" class="rating__label" for="rating10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
     <input class="rating__input" name="rating2" id="rating10" value="5" type="radio">
  </div>
</div>