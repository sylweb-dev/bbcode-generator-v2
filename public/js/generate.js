let audio = document.querySelector("#audio_1_form");

if(audio) {
    let cloneBtn = document.querySelector("#audio_clone_btn");
    if(cloneBtn) cloneBtn.addEventListener("click", () => {
        let container = document.querySelector("#container_audio");
        let counter = container.children.length;
        let newAudio = audio.cloneNode(true);


        container.appendChild(newAudio);

        newAudio.id = "audio_ " + (counter) + "_form";

        let newAudio_audio = newAudio.querySelector("#audio_1_lang");
        newAudio.querySelector('label[for="audio_1_lang"]').htmlFor = "audio_" + (counter) + "_lang";
        newAudio_audio.id = "audio_" + (counter) + "_lang";
        newAudio_audio.name = "audio_" + (counter) + "_lang";

        let newAudio_codec = newAudio.querySelector("#audio_1_codec");
        newAudio.querySelector('label[for="audio_1_codec"]').htmlFor = "audio_" + (counter) + "_codec";
        newAudio_codec.id = "audio_" + (counter) + "_codec";
        newAudio_codec.name = "audio_" + (counter) + "_codec";

        let newAudio_piste = newAudio.querySelector("#audio_1_piste");
        newAudio.querySelector('label[for="audio_1_piste"]').htmlFor = "audio_" + (counter) + "_piste";
        newAudio_piste.id = "audio_" + (counter) + "_piste";
        newAudio_piste.name = "audio_" + (counter) + "_piste";

        let newAudio_debit = newAudio.querySelector("#audio_1_debit");
        newAudio.querySelector('label[for="audio_1_debit"]').htmlFor = "audio_" + (counter) + "_debit";
        newAudio_debit.id = "audio_" + (counter) + "_debit";
        newAudio_debit.name = "audio_" + (counter) + "_debit";

        container.querySelector("input#audio").value = counter;
    })
}


let txt = document.querySelector("#txt_1_form");

if(txt) {
    let cloneBtn = document.querySelector("#txt_clone_btn");
    if(cloneBtn) cloneBtn.addEventListener("click", () => {
        let container = document.querySelector("#container_txt");
        let counter = container.children.length;

        let newAudio = txt.cloneNode(true);
        container.appendChild(newAudio);

        newAudio.id = "txt_" + (counter) + "_form";

        let newAudio_txt = newAudio.querySelector("#txt_1_lang");
        newAudio.querySelector('label[for="txt_1_lang"]').htmlFor = "txt_" + (counter) + "lang";
        newAudio_txt.id = "txt_" + (counter) + "_lang";
        newAudio_txt.name = "txt_" + (counter) + "_lang";

        let newAudio_format = newAudio.querySelector("#txt_1_format");
        newAudio.querySelector('label[for="txt_1_format"]').htmlFor = "txt_" + (counter) + "_format";
        newAudio_format.id = "txt_" + (counter) + "_format";
        newAudio_format.name = "txt_" + (counter) + "_format";

        container.querySelector("input#txt").value = counter;
    })
}