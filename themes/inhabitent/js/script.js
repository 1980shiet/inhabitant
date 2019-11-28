(function($) {
  $(function() {
    const searchBtn = document.getElementById('searchbtn');
    const searchField = document.getElementById('search-input');
    searchField.style.display = 'none';

    console.log(searchBtn);

    $('#searchbtn').on('click', function() {
      event.preventDefault();
      if (searchField.style.display === 'none') {
        searchField.style.display = 'block';
      } else {
        searchField.style.display = 'none';
      }
      //console.log('helo');
    });

    // console.log('hello');
    // $('body').append('hello world');
  });
  // todo try to get the search form in the header to open and close on click
})(jQuery);
