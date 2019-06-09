function update_count_value() {
    var count_person = $("#input_count_person").val();

    // $(".count_action").attr("href", "/recipe/1/count/"+count_person); 
    $(".cook_action").attr("href", "/recipe/1/cook/"+count_person);
}

$(document).ready(function() {
    update_count_value()
});

$("#input_count_person").change(function () {
    update_count_value()
});

$(".count_value").on("click", function() {
    var count_person = $("#input_count_person").val();

    var recipe_count = []
    var stock_count = []

    $(".count_for_recipe").each(function(key,value){
        recipe_count.push(parseFloat(value.outerText) * count_person)
    })
    $(".count_at_stock").each(function(key,value){
        stock_count.push(parseFloat(value.outerText))
    })

    for (var i = 0; i <= recipe_count.length; i++) {
        if (recipe_count[i] > stock_count[i]) {
            $($(".count_for_recipe").find("span")[i]).attr("class", "glyphicon glyphicon-remove")
        } else {
            $($(".count_for_recipe").find("span")[i]).attr("class", "glyphicon glyphicon-ok")
        }
        
    }
})
