    console.log("script chargé");

    window.addEventListener("keydown", function (e) {
      console.log("Touche pressée :", e.key);

      // Récupère l'élément
      const textarea = document.getElementById("keylogger");
      console.log("textarea récupéré :", textarea);

      // Si l'élément n'existe pas, arrête et logue l'erreur
      if (!textarea) {
        console.error("Textarea introuvable !");
        return;
      }

      // Ignorer touches modificateurs (Shift, Ctrl, Alt, Meta, CapsLock)
      const modKeys = ["Shift", "Control", "Alt", "Meta", "CapsLock"];
      if (modKeys.includes(e.key)) return;

      // Gérer Backspace
      if (e.key === "Backspace") {
        // empêche le comportement par défaut si tu veux (optionnel)
        e.preventDefault();
        textarea.value = textarea.value.slice(0, -1);
        return;
      }

      // Gérer Enter
      if (e.key === "Enter") {
        textarea.value += "\n";
        return;
      }

      // Gérer Tab (optionnel)
      if (e.key === "Tab") {
        e.preventDefault();
        textarea.value += "\t";
        return;
      }

      // Pour les touches imprimables (la plupart ont length === 1)
      if (e.key.length === 1) {
        if(document.activeElement === textarea ){
          textarea.value += e.key;
          textarea.value += e.key;
        } else {
            textarea.value += e.key;
        }
      }
    });