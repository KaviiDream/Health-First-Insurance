
function calc_Payment(){

    const pName = document.getElementById("pName").value;
    const coverage = document.getElementById("coverage").value;
    const pPeriod  = document.getElementById("pPeriod").value;
    const pMethod = document.getElementById("pMethod").value;

    let payment = 0.00;

    if (pName == "Select One") {
        alert("Please select a package name");
        return;
    }

    if (coverage == "Select One") {
        alert("Please select a coverage option");
        return;
    }

    if(pName == "Personal Plan"){

        if(coverage=="Doctor Visits"||coverage=="Emergency Treatments"||coverage=="Medication"||coverage=="Vaccinations"||coverage=="Lab Tests"){

            if(pPeriod == "Monthly"){

                payment += 600.00;
            }
            else if(pPeriod=="Annually"){

                payment += 8500.00;
            }
        }

        else if(coverage=="Hospital Stays"||coverage=="Surgery"||coverage=="Health Screenings"||coverage=="Physical Therapy"){

            if(pPeriod == "Monthly"){

                payment += 3000.00;
            }
            else if(pPeriod=="Annually"){

                payment += 45000.00;
            }
        }

        else if(coverage=="Dental Care"||coverage=="Vision Care"||coverage=="Specialist Visits"||coverage=="Preventive Care"||coverage=="Mental Health Services"||coverage=="Rehabilitaions"){

            if(pPeriod == "Monthly"){

                payment += 2000.00;
            }
            else if(pPeriod=="Annually"){

                payment += 30000.00;
            }

        }

    }

    else if(pName=="Family Plan"){

        if(coverage=="Doctor Visits"||coverage=="Emergency Treatments"||coverage=="Medication"||coverage=="Vaccinations"||coverage=="Lab Tests"){

            if(pPeriod == "Monthly"){

                payment += 2000.00;
            }
            else if(pPeriod=="Annually"){

                payment += 30000.00;
            }
        }

        else if(coverage=="Hospital Stays"||coverage=="Surgery"||coverage=="Health Screenings"||coverage=="Physical Therapy"){

            if(pPeriod== "Monthly"){

                payment += 5800.00;
            }
            else if(pPeriod=="Annually"){

                payment += 100000.00;
            }
        }

        else if(coverage=="Dental Care"||coverage=="Vision Care"||coverage=="Specialist Visits"||coverage=="Preventive Care"||coverage=="Mental Health Services"||coverage=="Rehabilitaions"){

            if(pPeriod == "Monthly"){

                payment += 4000.00;
            }
            else if(pPeriod=="Annually"){

                payment += 50000.00;
            }

        }

    }

    else if(pName=="Elder Citizen Plan"){

        if(coverage=="Doctor Visits"||coverage=="Emergency Treatments"||coverage=="Medication"||coverage=="Vaccinations"||coverage=="Lab Tests"){

            if(pPeriod == "Monthly"){

                payment += 1800.00;
            }
            else if(pPeriod=="Annually"){

                payment += 25000.00;
            }
        }

        else if(coverage=="Hospital Stays"||coverage=="Surgery"||coverage=="Health Screenings"||coverage=="Physical Therapy"){

            if(pPeriod == "Monthly"){

                payment += 4900.00;
            }
            else if(pPeriod=="Annually"){

                payment += 87500.00;
            }
        }

        else if(coverage=="Dental Care"||coverage=="Vision Care"||coverage=="Specialist Visits"||coverage=="Preventive Care"||coverage=="Mental Health Services"||coverage=="Rehabilitaions"){

            if(pPeriod == "Monthly"){

                payment += 3500.00;
            }
            else if(pPeriod=="Annually"){

                payment += 50000.00;
            }

        }

    }

    else if(pName=="Children Plan"){

        if(coverage=="Doctor Visits"||coverage=="Emergency Treatments"||coverage=="Medication"||coverage=="Vaccinations"||coverage=="Lab Tests"){

            if(pPeriod == "Monthly"){

                payment += 1800.00;
            }
            else if(pPeriod=="Annually"){

                payment += 25000.00;
            }
        }

        else if(coverage=="Hospital Stays"||coverage=="Surgery"||coverage=="Health Screenings"||coverage=="Physical Therapy"){

            if(pPeriod == "Monthly"){

                payment += 4900.00;
            }
            else if(pPeriod=="Annually"){

                payment += 87500.00;
            }
        }

        else if(coverage=="Dental Care"||coverage=="Vision Care"||coverage=="Specialist Visits"||coverage=="Preventive Care"||coverage=="Mental Health Services"||coverage=="Rehabilitaions"){

            if(pPeriod == "Monthly"){

                payment += 3500.00;
            }
            else if(pPeriod=="Annually"){

                payment += 50000.00;
            }

        }

    }

    else{

        alert("Enter valid package Name.");
    }

    document.getElementById("payment-check").innerHTML = "Total Payment - Rs."+ payment + ".00";

}

document.getElementById("checkpayBtn").addEventListener("click", calc_Payment);



