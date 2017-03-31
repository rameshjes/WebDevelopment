    document.getElementById("myform").addEventListener('submit',saveBookmark);

    // save Bookmark
      function saveBookmark(e){
      // Get form values

      var siteName = document.getElementById('siteName').value;
      var siteUrl = document.getElementById('siteUrl').value;


      if (!validation(siteName,siteUrl)){
        return false;
      }

      var bookmarkSite = {
        name: siteName,
        url: siteUrl,
      }
      //console.log(bookmark);

      /*
        Local Storage: It only stores strings, we also need to get data back from local storage sometime to verify
      whatever user is entering data is correct or not (in case of user and pass)
      With local storage, web applications can store data locally within the user's browser.
    Before HTML5, application data had to be stored in cookies, included in every server request.
    Local storage is more secure, and large amounts of data can be stored locally, without affecting website performance.
    Unlike cookies, the storage limit is far larger (at least 5MB) and information is never transferred to the server.
    Local storage is per origin (per domain and protocol). All pages, from one origin, can store and access the same data.
    */

      //localStorage.setItem('test','Hello World');  // set Item is used to set value, where get item is used to value.
      //test is key here to retrive data


      //console.log(localStorage.getItem('test')); // To get item
      //localStorage.removeItem('test');  // To delete item from local storage
      //console.log(localStorage.getItem('test')); // since we have removed it, it will give you null

      // Now we will how to save bookmark value, if there is any legal value, then we need to save else no

      // Test if bookmark is null
      if(localStorage.getItem('bookmarks') === null){

       var bookmarks = [];
       // Add to array
       bookmarks.push(bookmarkSite);
       // Set to Local storage

       localStorage.setItem('bookmarks',JSON.stringify(bookmarks));// Local storage only stores strings to JSON.stringify converts to string


     }else{
       //console.log('here')
       // Get bookmark from local storage
       // Since we will get string we need to convert it
      var  bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
       // Add bookmark to array
       bookmarks.push(bookmarkSite);
       // Re-set back to storage
        localStorage.setItem('bookmarks',JSON.stringify(bookmarks));
     }
     //Reset the form

     document.getElementById("myform").reset();
     //Re-fetch bookmarks
     fetchBookmarks();
      // Since when you press button text goes immediately because by default button is already pressed , to avoid this:
      // Prevent form from submitting
      e.preventDefault();
    }


    // fetch bookmarks
    // Now we want to display all bookmarks

    function fetchBookmarks(){

      var getBookmarks = JSON.parse(localStorage.getItem('bookmarks'));

      //console.log(getBookmarks.length);
      //console.log(getBookmarks);

      var BookmarkResults = document.getElementById('bookmarksResults');
      // For output
      BookmarkResults.innerHTML =  '';

      // we get value from local storage one by one using loop

      for (var i = 0; i < getBookmarks.length ;i++){
        var name = getBookmarks[i].name;
        var url = getBookmarks[i].url;
        // well class is bootstrap class
        BookmarkResults.innerHTML += '<div class = "well">' +
                                      '<h3>'+
                                      name+
                                      ' <a class="btn btn-default" target="_blank" href="'+ url +'">  Click to Visit </a> ' +
                                      ' <a onclick="deleteBookmark(\'' + url+'\')"class="btn btn-danger"  href="">  Delete </a> ' +
                                      '</h3>'+
                                      '</div>';
      }


  }
  // '< a class="btn btn-danger" target="_blank" href="#">Delete</a>' +

  // Delete Bookmark
  // we need to fetch local storage and see which url we want to remove and update the local storage
  function deleteBookmark(url){
    //console.log(url);

    var getBookmarks = JSON.parse(localStorage.getItem('bookmarks'));
    // loop
    for(var i = 0; i < getBookmarks.length; i++){
      if(getBookmarks[i].url == url ){
        // remove from array
        // The splice() method adds/removes items to/from an array, and returns the removed item(s).
        getBookmarks.splice(i,1);
      }
    }

      localStorage.setItem('bookmarks',JSON.stringify(getBookmarks));
      //Re-fetch
      fetchBookmarks();
  }

  function validation(siteName,siteUrl){
    // Now when use enters data, we want to save data in our local storage. Therefore, we will create object

    // Since when url/name is blank, it still save that  which we don't want

    if(!siteName || !siteUrl){
      alert('Please fill in the form');
      return false;
    }

    // Valid pattern of URL
    var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
    var regex = new RegExp(expression);

    if(!siteUrl.match(regex)){
      alert("Enter valid URL");
      return false

    }

    return true;

  }
