( function( $ ) {
    if ('undefined' !== typeof prefixL10n) {
        upsell = $('<a class="prefix-upsell-link"></a>')
            .attr('href', prefixL10n.prefixURL)
            .attr('target', '_blank')
            .text(prefixL10n.prefixLabel)
            .css({
                'display' : 'inline-block',
                'background-color' : '#ff3300',
                'color' : '#fff',
                'text-transform' : 'uppercase',
                'margin-top' : '6px',
                'padding' : '8px 10px',
                'font-size': '10px',
                'letter-spacing': '1px',
                'line-height': '1.5',
                'clear' : 'both'
            })
        ;

        setTimeout(function () {
            $('#accordion-section-themes h3').append(upsell);
        }, 200);

        // Remove accordion click event
        $('.prefix-upsell-link').on('click', function(e) {
            e.stopPropagation();
        });
    }

} )( jQuery );
