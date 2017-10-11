function genderCheck(stA,stB){
    //checks if students' gender compatability
    var genderMatch = false;
    if((stA.gender_pref === "No_Preference" || stA.gender_pref === stB.gender) && (stB.gender_pref === "No_Preference" || stA.gender === stB.gender_pref)){
        genderMatch = true;
    }
    return genderMatch;
    
}

function classToNum(classString){
    var classNum = 0;
    if (classString === 'Freshman'){
        classNum = 1;
    } else if (classString === 'Sophomore'){
        classNum = 2;
    } else if (classString === 'Junior'){
        classNum = 3;
    } else {
        classNum = 4;
    }
    return classNum;
}

function heightToNum(heightString){
    var heightNum = 0;
    if (heightString === "height_1"){
        heightNum = 1;
    } else if (heightString === 'height_2'){
        heightNum = 2;
    } else if (heightString === 'height_3'){
        heightNum = 3;
    } else if (heightString === 'height_4'){
        heightNum = 4;
    } else if (heightString === 'height_5'){
        heightNum = 5;
    } else {
        heightNum = 6;
    }
    return heightNum;
}





function matchificate(stA,stB){
    var matchScore = 0;
    
    //checks class score - best possible 3
    var classScore = (3-Math.abs(classToNum(stA.class_pref)-classToNum(stB.class)))/3;
    
    var physicalScore = 0;
    // checks physical score - best possible 5
    physicalScore += (5-Math.abs(heightToNum(stA.pref_height)-heightToNum(stB.height)))/5;
    physicalScore += (4-Math.abs(stA.pref_phys_rate-stB.phys_rate))/4;
    physicalScore += (4-Math.abs(stA.pref_face_rating-stB.face_rate))/4;
    physicalScore += (4-Math.abs(stA.pref_appearance-stB.appearance))/4;
    physicalScore += (4-Math.abs(stA.pref_clothing_style-stB.clothing_style))/4;
    
    
    
    var personalityScore = 0;
    //checks personality score - best possible 9
    personalityScore += (4-Math.abs(stA.pref_intelligence-stB.intelligence))/4;
    personalityScore += (4-Math.abs(stA.pref_humor-stB.humour))/4; //yes, it's with a u, but only for one variable
    personalityScore += (4-Math.abs(stA.pref_honesty-stB.honesty))/4;
    personalityScore += (4-Math.abs(stA.pref_kindness-stB.kindness))/4;
    personalityScore += (4-Math.abs(stA.qual_time-stB.qual_time))/4;
    personalityScore += (4-Math.abs(stA.phys_aff-stB.phys_aff))/4;
    personalityScore += (4-Math.abs(stA.exch_pres-stB.exch_pres))/4;
    personalityScore += (4-Math.abs(stA.words_aff-stB.words_aff))/4;
    personalityScore += (4-Math.abs(stA.support-stB.support))/4;
    
    var hobbyScore = 0;
    //checks hobby score - best possible 13
    hobbyScore += (4-Math.abs(stA.math-stB.math))/4;
    hobbyScore += (4-Math.abs(stA.science-stB.science))/4;
    hobbyScore += (4-Math.abs(stA.gym-stB.gym))/4;
    hobbyScore += (4-Math.abs(stA.social_studies-stB.social_studies))/4;
    hobbyScore += (4-Math.abs(stA.english-stB.english))/4;
    hobbyScore += (4-Math.abs(stA.arts-stB.arts))/4;
    hobbyScore += (4-Math.abs(stA.languages-stB.languages))/4;
    hobbyScore += (4-Math.abs(stA.latin-stB.latin))/4;
    hobbyScore += (4-Math.abs(stA.asian-stB.asian))/4;
    hobbyScore += (4-Math.abs(stA.american-stB.american))/4;
    hobbyScore += (4-Math.abs(stA.european-stB.european))/4;
    hobbyScore += (4-Math.abs(stA.arabic-stB.arabic))/4;
    hobbyScore += (4-Math.abs(stA.india-stB.india))/4;
    
    //builds the weighting for the score
    matchScore = 40(classScore) + 25(hobbyScore/13) + 20(personalityScore/9) + 15(physicalScore/5);

    
    //returns match score
    return matchScore;
}


//two example people to test crap
function person(gender,genderPreference){
    this.gender = gender;
    this.gender_pref = genderPreference;
}

var person1 = new person('other','No_Preference');
var person2 = new person('female','other');

console.log(genderCheck(person1,person2));