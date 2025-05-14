window.addEventListener('message', function(e) {
  if(e.origin=="https://www.ike-sunshine.co.jp"){
    document.getElementById('myIframe').height = e.data;
  }
}, false);
