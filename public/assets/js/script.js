const bodyAttr = "data-body";
const body = $("html, body");
window.addEventListener("wheel", () => {
  body.stop(); // Zapobieganie animacji
});

// return

const RETURN = $("[data-return]");

RETURN.on("click", () => {
  window.history.back();
});

// --------------------------------------------

// scrollTop

const BACK = $("[data-back]");
BACK.on("click", () => {
  body.stop().animate({ scrollTop: 0 }, 700, "swing");
});

// --------------------------------------------
