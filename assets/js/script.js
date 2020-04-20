/** The starting jquery function created with 
 * an ES6 arrow function... 
 * */
$(()=>{

    // Mobile Menu Open & Close Button
    // Opens the mobile menu...
    /**This function uses the on method for the html element with 
     * the class of open-btn to execute a function on a click event 
     * that uses the toggleClass method to remove the class of 
     * action from the html element with the class of mobile-links
     * add the css method is used to change the css display property
     * of the html element with the class of open-btn to none...
     * */
    // On method to call a function on a click event...
    $('.open-btn').on('click', ()=> {
        // ToggleClass method to add a class to an tml element...
        $('.mobile-links').toggleClass('active')
        // CSS method to change the css property of an html element...
        $('.open-btn').css({
            display: 'none'
        })
    })
    // Closes the mobile menu...
    /**This function uses the on method for the html element with 
     * the class of close-btn to execute a function on a click event 
     * that uses the toggleClass method to add the class of 
     * action from the html element with the class of mobile-links
     * add the css method is used to change the css display property
     * of the html element with the class of opent-btn to flex...
     * */
    // On method to call a function on a click event...
    $('.close-btn').on('click', ()=> {
        // ToggleClass method to remove a class to an tml element...
        $('.mobile-links').toggleClass('active')
        // CSS method to change the css property of an html element...
        $('.open-btn').css({
            display: 'flex'
        })
    })

})