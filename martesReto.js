import java.util.Scanner;
public class Main
{
	public static void main(String[] args) {
	    /*Queremos guardar los nombres y la edades de los alumnos de un curso. 
	    Realiza un programa que introduzca el nombre y la edad de cada alumno. 
	    El proceso de lectura de datos terminará cuando se introduzca como nombre un asterisco (*) 
	    Al finalizar se mostrará los siguientes datos:

        Todos lo alumnos mayores de edad.
        Los alumnos mayores (los que tienen más edad)
	    */
		
	    Scanner scanner = new Scanner(System.in);
	   // int numStudents = 0;
	   // System.out.println("Ingrese la cantidad de alumnos");
	   // numStudents = scanner.nextInt();
	   // int ageStudents[] = new int[numStudents];
	   // String nameStudents[] = new String[numStudents]; //[1,2,3,4] - length:4, index 0-3
	   // scanner.nextLine();
	   // for(int i=0; i<numStudents; i++){
	   //     System.out.println("Ingrese nombre del estudiante: " + (i+1));
	   //     nameStudents[i] = scanner.nextLine();
	   //     System.out.println("nameStudent: " + nameStudents[i]);
	   //     if(nameStudents[i].equals("*")){
	   //         break;
	   //     }
	   //     System.out.println("Ingrese edad del estudiante: " + (i+1));
	   //     ageStudents[i] = scanner.nextInt();
	   //     scanner.nextLine();
	        
	   // }
	   // for(int i=0; i<numStudents; i++){
	   //     System.out.println("Nombre: " + nameStudents[i] + " edad: " + ageStudents[i]);
	   // }
	   
	   String names = "";
	   String ages = "";
	   scanner.nextLine();
	   while(true){ //pedro,juan,jose,david,*,
	       System.out.println("Ingrese nombre");
	       String newData = scanner.nextLine();
	       if(newData.equals("*")){
	           break;
	       }
	       names = names + newData + ",";
	       scanner.nextLine();
	       System.out.println("Ingrese edad");
	       ages = ages + scanner.nextLine() + ",";
	       scanner.nextLine();
	   }
	   System.out.println("Nombres" + names);
	   System.out.println("Edades" + ages);
	    
	}
}
