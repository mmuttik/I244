/* Lehe laadimine, mis pole tegelikult vajalik: // Shorthand for $( document ).ready()
$(function() {
  console.log( "ready!" );
}); */

$(function() {
  // Salvestame "li" esimese elemendi muutujasse
  var act = $("li").first();
  act.addClass("active");

  // Pöördume button elemendi poole
  $("button").click(function() {
    act.removeClass("active");
    // Pöördumine selle html faili poole
    if ($(this).html() == "edasi") {
      // Kui aktiivne element on viimane 'child' siis muuta aktiivseks esimene 'child', else liigu edasi ja muuda aktiivseks
      if (act.is(":last-child")) {
        act = $("li").first();
      } else {
        act = act.next();
      }
      // Tagasi klikkides
    } else {
      if (act.is(":first-child")) {
        act = $("li").last();
      } else {
        act = act.prev();
      }
    }
    act.addClass("active");
  });
});
