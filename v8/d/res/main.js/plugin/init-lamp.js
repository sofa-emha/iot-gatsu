
    $(document).on('ready', function () {
      // initialization of header
      var header = new HSHeader($('#header')).init();

      // initialization of mega menu
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();

      // initialization of unfold
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

      // initialization of form validation
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this), {
          rules: {
            confirmPassword: {
              equalTo: '#signupPassword'
            }
          }
        });
      });

      // initialization of show animations
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });

      // initialization of toggle state
      $('.js-toggle-state').each(function () {
        var toggleState = new HSToggleState($(this)).init();
      });

      // initialization of go to
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });