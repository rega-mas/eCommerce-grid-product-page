var options = {
  valueNames: ['name', 'category', 'brand', 'colour', 'price']
};
var productList = new List('products-list', options);

// Assigning references to the filter buttons
var filterCategoryButton = document.getElementById("filter--category");
var removeFiltersButton = document.getElementById("removeFilters");

// When the filter button is clicked. The list is filtered by calling the filter function of the list object and passing in a function that accepts the list items.
filterCategoryButton.addEventListener("click", function() {
  productList.filter(function(item) {
    if (item.values().category == "surfboard") {
      return true;
    }
    // else if (item.values().category == "clothing") {
    //   return true;
    // }
    // else if (item.values().category == "accessories") {
    //   return true;
    //}
    else {
      return false;
    }
  }); // Only items that have Edmonton as the city.
});

// When the remove filter button is clicked, the filters are removed by calling the filter function once again with no parameters.
removeFiltersButton.addEventListener("click", function() {
  productList.filter();
});

// Sort by name
$("#a-z-sort").click(function() {	
	if (this.innerHTML == "Sort Z-A"){
		this.innerHTML = "Sort A-Z";
	}
	else {
		this.innerHTML = "Sort Z-A";
	}	
});

// Sort by price
$("#price-sort").click(function() {
	console.log('clicked');
	if (this.innerHTML == "Price high to low"){
		this.innerHTML = "Price low to high";
	}
	else {
		this.innerHTML = "Price high to low";
	}	
});