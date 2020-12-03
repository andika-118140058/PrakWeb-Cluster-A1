var app = new function() {

    this.el = document.getElementById('barang');
  
    this.barang = ['Buku Tulis','Pensil','Spidol'];
    
    this.FetchAll = function() {
      var data = '';
  
      if (this.barang.length > 0) {
        for (i = 0; i < this.barang.length; i++) {
          data += '<ul>';
          data += '<li>' + this.barang[i] + ' ';
          data += '<a href = "#" onclick="app.Edit(' + i + ')">[Edit </a>';
          data += '<a href = "#" onclick="app.Delete(' + i + ')"> | Delete]</a></li>';
          data += '</ul>';
        }
      }
  
      return this.el.innerHTML = data;
    };
  
    this.Add = function () {
      el = document.getElementById('add-name');
      // Get the value
      var barang = el.value;
  
      if (barang) {
        // Add the new value
        this.barang.push(barang.trim());
        // Reset input value
        el.value = '';
        // Dislay the new list
        this.FetchAll();
      }
    };
  
    this.Edit = function (item) {
      var el ;
      el = prompt('Nama baru','');
      // Display value in the field
      this.barang[item] = el;
    
          this.FetchAll();
    
    };
  
    this.Delete = function (item) {
      // Delete the current row
      var yakin;
      yakin = confirm('Kamu yakin ingin menghapus?');
      if(yakin){
        this.barang.splice(item, 1);
        // Display the new list
        this.FetchAll();
      }
    };
  }
  
  app.FetchAll();
  
  function CloseInput() {
    document.getElementById('spoiler').style.display = 'none';
  }