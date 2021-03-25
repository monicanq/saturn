/**
 * File index.js.
 *
 * Handles skip to next section.
 *
 * 
 * 
 */
( function() {

    const caret = document.getElementById('caret');
    const element = document.getElementById('primary');

    if ( caret != null){
        caret.addEventListener ('click', e => {
            e.preventDefault();
            // console.log(element);
            // console.log('I clicked the caret');
            element.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        })
    }

}() );