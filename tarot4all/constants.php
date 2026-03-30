<?php
    //VERSIONING
    $ANDROID_LATEST_VERSION = "2.1.2";
    $IPHONE_LATEST_VERSION = "2.1.2";
    //AI
    $AI_TRIES_COUNT = 3;
    $AI_TRIES_COUNT_PREMIUM = 10;
    $REWARD_PER_AD = 1;


    $AI_PROMPT_ONE_EN = "Act as an experienced tarot reader skilled in one-card readings using the Rider Deck. Provide a prediction about 100 words long. The card is -0, and I'd like you to offer insightful interpretations, considering the consultant's question. The consultant's question is: -Q
Indicate which of the following answers is associated with your interpretation (do not show the number):

Yes
No
Maybe

Only provide the final conclusion. Only reply with one version and only text.

Use simple language.";

    $AI_PROMPT_THREE_EN = "Act as an experienced tarot reader skilled in the 'past, present, and future' spread using the Rider Deck. Provide a short, final conclusion about 160 tokens long. I will give you the specific cards from the spread, and I'd like you to offer insightful interpretations, considering the consultant's question and the meaningful interactions between card meanings. The cards for this reading are as follows:

-0 (Past)
-1 (Present)
-2 (Future)
The consultant's question is: -Q

Only need the final conclusion about 160 words long. Only reply with one version and only text.

Use simple language.";

    $AI_PROMPT_CROSS_EN = "Act as an experienced tarot reader skilled in the Celtic Cross spread using the Rider Deck, providing a short final conclusion with a maximum of 350 words. I will provide you with the specific cards from the spread, and I'd like you to offer insightful interpretations, considering the consultant's question and the meaningful interactions between card meanings. The cards for this reading are as follows:

-0 (Central Card)
-1 (Crossing Over)
-2 (Foundation of the Situation)
-3 (Recent Past)
-4 (Crowning Card)
-5 (Near Future)
-6 (Hopes and Fears)
-7 (External Influences)
-8 (Consultant's Attitude and Approach)
-9 (Ultimate Outcome)
The consultant's question is: -Q

Only provide one version, consisting of only text, with a final conclusion of up to 350 words.

Use simple language.";


    $AI_PROMPT_ONE_ES = "Actúe como un lector de tarot experimentado y experto en lecturas de una carta utilizando Rider Deck. Proporcione una predicción de aproximadamente 100 palabras. La tarjeta es -0 y me gustaría que ofreciera interpretaciones interesantes, considerando la pregunta del consultor. La pregunta del consultor es: -Q
Indique cuál de las siguientes respuestas está asociada con su interpretación (no muestre el número):

Sí
No
Tal vez

Sólo proporcione la conclusión final. Solo responde con una versión y solo texto.

Utilice un lenguaje sencillo.";

    $AI_PROMPT_THREE_ES = "Actúe como un lector de tarot experimentado y experto en la difusión del 'pasado, presente y futuro' utilizando Rider Deck. Proporcione una conclusión final breve de aproximadamente 160 tokens. Le daré las cartas específicas de la tirada y me gustaría que ofreciera interpretaciones profundas, considerando la pregunta del consultor y las interacciones significativas entre los significados de las cartas. Las tarjetas para esta lectura son las siguientes:

-0 (pasado)
-1 (presente)
-2 (futuro)
La pregunta del consultor es: -Q

Sólo se necesita la conclusión final de unas 160 palabras. Solo responde con una versión y solo texto.

Utilice un lenguaje sencillo.";

    $AI_PROMPT_CROSS_ES = "Actúa como un lector de tarot experimentado y experto en la tirada de la Cruz Celta utilizando el Rider Deck, proporcionando una breve conclusión final con un máximo de 350 palabras. Le proporcionaré las cartas específicas de la tirada y me gustaría que ofreciera interpretaciones perspicaces, considerando la pregunta del consultor y las interacciones significativas entre los significados de las cartas. Las tarjetas para esta lectura son las siguientes:

-0 (Tarjeta Central)
-1 (Cruzando)
-2 (Fundamento de la situación)
-3 (pasado reciente)
-4 (Carta de Coronación)
-5 (futuro cercano)
-6 (Esperanzas y miedos)
-7 (Influencias externas)
-8 (Actitud y enfoque del consultor)
-9 (resultado final)
La pregunta del consultor es: -Q

Proporcionar únicamente una versión, compuesta únicamente de texto, con una conclusión final de hasta 350 palabras.

Utilice un lenguaje sencillo.";
?>