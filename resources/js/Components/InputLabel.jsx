// import React from "react";

// export default function Label({ value, forInput, className, children }) {
//     return (
//         <label
//             htmlFor={forInput}
//             className={`text-base block mb-2 ` + className}
//         >
//             {value ? value : children}
//         </label>
//     );
// }

import React from "react";

export default function Label({ forInput, value, className, children }) {
    return (
        <label
            htmlFor={forInput}
            className={`text-base block mb-2 ` + className}
        >
            {value ? value : children}
        </label>
    );
}

// export default function Label({ value, className , forInput, value ,children, ...props }) {
//     return (
//         <label {...props} className={`text-base block mb-2 ` + className}>
//             {value ? value : children}
//         </label>
//     );
// }
