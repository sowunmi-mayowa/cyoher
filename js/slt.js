const osinfade  = document.querySelector('.osinfade');
const abia  = document.querySelector('.abia');
const chris  = document.querySelector('.chris');

osinfade.addEventListener('click', () => {
    Swal.fire({
        icon: 'info',
        title: "OSINFADE, BASIRU GBOLAHAN",
        text: 'Mr. Basiru Gbolahan Osinfade, a chief lecturer, current Head of the Science Laboratory Technology (SLT) Department, Federal Polytechnic, Ilaro. He earned a B.Sc degree (Chemistry) from the University of Ilorin, an M.Sc degree (Organic Chemistry) from University of Ibadan. He lectures, supervises and examines research projects of National Diploma (ND) and Higher National Diploma students. He is currently the External Examiners at the MoshoodAbiola Polytechnic Abeokuta, Ogun State. He has served as chairman of various committees at the departmental level and also as member in various committees at School level. He is a member of the Chemical Society of Nigeria (CSN). Mr. Osinfade’s research focus is on Pollution monitoring, Food chemistry and toxicology. He is the author of books titled Principles and Mechanisms of Aliphatic Organic Compounds and General Principles and Mechanism of Aromatic Organic Compounds with problems and solution.',
        iconColor: "green",
    });
})
abia.addEventListener('click', () => {
    Swal.fire({
        icon: 'info',
        title: "ABIAZIEM CHIOMA VIVIAN, PhD",
        text: 'My name is Abiaziem, Chioma Vivian, a senior lecturer in the Department of Science Laboratory Technology, Federal Polytechnic Ilaro. I have lectured in the department for a period spanning over 16 years. I obtained my first degree from Chemistry Department, University of Jos, my second degree from University of Ibadan and my third degree  in Covenant University Ota. My research interest is in Environmental Chemistry; managing waste and converting waste to wealth through analytical synthesis.I have several publications in reputable journals, attended several conferencesand have written several chemistry textbooks to my credit. I am a member of Royal Society of Chemistry (RSC United Kingdom) and Chemical Society of Nigeria (CSN).  ',
        iconColor: "green",
    });
})

chris.addEventListener('click', () => {
    Swal.fire({
        icon: 'info',
        title: "UKONU, CHRISTIAN UGOCHUKWU",
        text: 'As named above, I am a young, vibrant, passionate researcher and teacher who love to create impart and very skillful. I had Bachelor of Science degree in Biochemistry and Master of Science degree in Industrial Biochemistry.Recently, I contributed in developing course outline for Plant biochemistry ((STH 414) as local content), which is one of the courses I taught in first semester HND 2 biochemistry option.I also contributed in developing course outline for Comparative biochemistry (STH 424) for HND 2 biochemistry option. S.L.T department. In 20017, I bagged a certificate in Environmental Risk Assessment a training organized by Society of Environmental Toxicology And Chemistry (SETAC) which gives me an added advantage to my academic and research developmentI have been able to produce biogas (a renewable energy) from combination of saw dust and cow dung which can be used domestically for cooking, lighting and fueling cars, and generators using a prototype Chinese fixed dome bioreactor under anaerobic condition. ',
        iconColor: "green",
    });
})