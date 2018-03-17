# Wersje
## 0.0.1
### Dodano
 * Dodano kernel aplikacji
 * Dodano managery
 * Dodano template
 * Dodano klasy zwracające zmienne dla template
 * Dodano abstrakcyjną klasę ServiceProviders
 * Dodano abstrakcyjną klasę Managers
 * Dodano klasę zarządzającą loggingiem (bazowa manager)
 * Dodano klasę zarządzającą configiem (bazowa manager)
 * Dodano klasę poziomu loggingu
 * Dodano klasę poziomu działania systemu (dla Kernela)
 * Dodano .gitignore
 * Dodano system ORM (Doctrine)
 * Dodano komponent `security`
 * Dodano `doctrine-maker`
 * Dodano klasę `User`
 * Dodano Entity
 * Dodano testy dla klasy `Kernel`
 * Dodano zmienne globalne zwracające dane dla widoku
 * Dodano `webpack`.
### Zmieniono
 * Zwracanie typów z `boolean` na `bool`
### Zdepecjonowano
 * Zdeprecjonowano funkcje odpowiadające za logging z <span style="color:blue">Kernela</span>
 * Zdeprecjonowano funkcje odpowiadające za pobieranie danych z configu z Kernela
 * Zdeprecjonowano klasę BasicTemplatesReturn
 * Zdeprecjonowano klasę IndexTemplatesReturn
 ### Usunięto
 * Katalog vendor
