Partie 2:
Les mauvaises pratiques de programmation sont:
* des nom de variables, de fonctions, de classes au hasard (mauvais nommage)
* une complexité importante, des boucles dans des boucles
* du code comportant une mauvaise visibilité, succession de if imbriqué (idem pour les switchs)
* n'utiliser que de la programmation iterative (alors qu'on peut faire des classes)





injection de dependance :
C'est le fait de créer une classe qui fait referance à une autre classe et pour lequel il n'est pas necessaire de créer un constructeur (car il prendra celui de l'autre classe)
ex : une classe personne qui a un attribut cartebancaire qui, justement et une classe, donc new Personne n'aura pas besoin de constructeur

design pattern observer :
C'est le fait d'utiliser une collection pour gérer des evenements tel que par exemple des erreurs html (er 404,  etc)
pour cela il faut une interface par exemple l interface Erreurs, qui va mettre a jour  lobjet d'une classe abstraite ErreursClasse

temporal coupling :
ce sont des dependances qui ont un facteur de temps