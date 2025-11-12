document.addEventListener(
  "DOMContentLoaded",
  function () {
    document.querySelector(".wpcf7").addEventListener(
      "wpcf7submit",
      function (event) {
        window.scrollTo({
          left: 0,
          top: document.querySelector(".contact-form").offsetTop - 100,
          behavior: "smooth",
        });
      },
      false
    );

    document.querySelector(".wpcf7").addEventListener(
      "wpcf7mailsent",
      function (event) {
        setTimeout(function () {
          window.location.href = "/";
        }, 5000);
      },
      false
    );
  },
  false
);
