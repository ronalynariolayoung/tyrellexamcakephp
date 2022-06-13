// @dev: Make sure that the document is all loaded and ready
$(document).ready(() => {

    // @dev: Executed when submit button is clicked 
    $("#form_deck").submit(function(e) {
        // @dev: Prevent form from reloading the whole page
        e.preventDefault();

        // @dev: Initialization
        let results_div = $('#result');
        let comma_result_div = $('#comma_result');
        var people = $("#npeople").val();
        var result="";
        var comma_result="";

        // @dev: Making sure that all results `divs` are empty
        //       before new values are appended
        comma_result_div.html("");
        results_div.html("");

        // @dev: Loop `n` number of people
        for (i = 0; i < people; ++i) {
            // @dev: Invoke function that generates random card number
            var num = getCardNumber();
            // @dev: Invoke function that generates random card type
            var type = getCardType();
            // @dev: Assemble generated card with number and type
            var card = `${num}-${type}`;
            // @dev: Format according to file name of card image
            //       located at `/webroot/img/deck/`
            var filecard = `${num}${type}.svg`;

            // @dev: Append all generated cards in a single variable
            comma_result += `${card}, `;
            // @dev: Append all divs containing the person number, card number, card type, and image
            result += `<div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center flex-column">
                <p class="fw-bold">Person ${i+1}: ${card}</p>
                <img src='/img/deck/${filecard}'/>
            </div>`;
        };

        // @dev: Append all comma separated cards into the `comma_result_div` div
        comma_result_div.append(`<div class="content w-100 col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center flex-column">${comma_result}</div>`);
        // @dev: Append all generated card images
        results_div.append(result);
    });
    // @dev: End of submit form function


    // @name: getCardNumber
    // @parameters: None
    // @dev: The function that generates a random card number from 1-13
    //       Return appropriate 'letter' according to the newly generated number
    // @results:
    //          - <int>: A random number from 2-9 OR
    //          - <string>: A single character from the following letters ['A', 'J', 'Q', 'K', 'X']
    //                      - A: Represents 1 or Alas
    //                      - X: Represents 10
    //                      - J: Represents 11 or Jack
    //                      - Q: Represents 12 or Queen
    //                      - K: Represents 13 or King
    function getCardNumber() {
        // @dev: Generates any random number from 1-13  
        var rand = Math.floor(Math.random() * 13) + 1;
        
        // @dev: If `rand` returns any number from 2-9, return it as is
        if (rand >= 2 && rand <= 9){
            return rand;
        }
        // @dev: If `rand` returns any number from `10-13` or `1`, return appropriate equivalent
        else {
            switch(rand){
                case 1:
                    return 'A';
                case 11:
                    return 'J';
                case 12:
                    return 'Q';
                case 13:
                    return 'K';
                default:
                    return 'X';
            }
        }
    }
    // @dev: End of getCardNumber function


    // @name: getCardType
    // @parameters: None
    // @results: <string> - A single character from the following: `S, H, D, C`
    //          - S: Spade
    //          - H: Heart
    //          - D: Diamond
    //          - C: Club
    function getCardType(){
        var rand = Math.floor(Math.random() * 4);
        const type = ['S', 'H', 'D', 'C'];

        return type[rand];
    }
    // @dev: End of getCardType function
});
// @dev: End of script
