const MARKUP_RECT = [
    'x',
    'y',
    'left',
    'top',
    'right',
    'bottom',
    'width',
    'height'
];

const toOptionalFraction = value => typeof value === 'string' && /%/.test(value) ? parseFloat(value) / 100 : value

// adds default markup properties, clones markup
export const prepareMarkup = (markup) => {

    const [type, props] = markup;
    
    return [
        type,
        {
            zIndex: 0,
            ...props,
            ...MARKUP_RECT.reduce((prev, curr) => {
                prev[curr] = toOptionalFraction(props[curr])
                return prev;
            }, {}),
        }
    ]
}