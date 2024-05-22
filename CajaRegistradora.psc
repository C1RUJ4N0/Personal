Algoritmo CajaRegistradora
	Definir nomprod Como Caracter
	definir precio, total Como Entero
	Dimension nomprod[3]
	Dimension precio[3]
	para i<-1 Hasta 3 Hacer
		Escribir "Ingrese el nombre del producto"
		Leer nomprod[3]
		Repetir
			Escribir "Ingrese los precios de los productos"
			Leer precio[3]
		Hasta Que precio[3] >= 0
	FinPara
	total<- precio[3]+precio[3]+precio[3]
	Escribir "el total a pagar es: $",total
FinAlgoritmo
