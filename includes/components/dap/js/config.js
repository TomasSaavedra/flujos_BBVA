com.bbva.config = com.bbva.config || {};

com.bbva.config.Config = (function(wd, document) {

	/*
	 * Este archivo contiene el enlace directo son los campos que son
	 * obligatorios y deben validarse
	 */

	return {

		JSONFORM : {

			/*
			 * types 1 : obligatory 2 : check, obligatory 3 : numeric,
			 * obligatory 4 : email, obligatory 5 : numeric,with a max,
			 * obligatory 6 : numeric,with a length, obligatory 7 : different of
			 * a, obligatory 8 : numeric, phone, with a length 9 : numeric,
			 * greater or lower than, obligatory
			 */

			step1 : { /*
						 * Step indica el fragmento del formulario (datos
						 * personales, datos laborales .....)
						 */
				lb_name1 : {
					msg : 'Confirma que tu nombre est\u00e9 completo.',
					field : $('#lb_name1'),
					type : 1
				},
				lb_rut : {
					msg : 'Confirma que tu rut.',
					field : $('#lb_rut'),
					type : 1
				}
			},

			step2 : {
				status : 0,
				status_one : {
					lb_res_dep : {
						msg : 'Debes seleccionar departamento del domicilio',
						field : $('#lb_res_dep'),
						type : 1
					},
					lb_res_cit : {
						msg : 'Debes seleccionar ciudad del domicilio',
						field : $('#lb_res_cit'),
						type : 1
					},
					lb_add_tipvia : {
						msg : 'Debes ingresar tipo de v\u00eda',
						field : $('#lb_add_tipvia'),
						type : 1
					},
					lb_add_num : {
						msg : 'Debes ingresar n\u00famero v\u00eda',
						field : $('#lb_add_num'),
						type : 1
					},
					// lb_add_bis: {
					// msg: 'Debe seleccionar Bis',
					// field: $('#lb_add_bis'),
					// type: 1
					// },
					// lb_add_car: {
					// msg: 'Debe seleccionar zona',
					// field: $('#lb_add_car'),
					// type: 1
					// },
					lb_add_numpla1 : {
						msg : 'Debes ingresar placa',
						field : $('#lb_add_numpla1'),
						type : 1
					},
					// lb_add_bis2: {
					// msg: 'Debe ingresar Bis',
					// field: $('#lb_add_bis2'),
					// type: 1
					// },
					// lb_add_car2: {
					// msg: 'Debe seleccionar segunda zona',
					// field: $('#lb_add_car2'),
					// type: 1
					// },
					lb_add_numpla2 : {
						msg : 'Debes ingresar placa n\u00famero 2',
						field : $('#lb_add_numpla2'),
						type : 1
					},
					lb_ges_ofi : {
						msg : 'Debes seleccionar oficina para la gesti\u00f3n',
						field : $('#lb_ges_ofi'),
						type : 1
					}
				},
				status_two : {
					lb_res_dep : {
						msg : 'Debes seleccionar departamento del domicilio',
						field : $('#lb_res_dep'),
						type : 1
					},
					lb_res_cit : {
						msg : 'Debes seleccionar ciudad del domicilio',
						field : $('#lb_res_cit'),
						type : 1
					},
					lb_add_tipvia : {
						msg : 'Debes ingresar tipo de v\u00eda',
						field : $('#lb_add_tipvia'),
						type : 1
					},
					lb_add_num : {
						msg : 'Debes ingresar n\u00famero v\u00eda',
						field : $('#lb_add_num'),
						type : 1
					},
					lb_add_numpla1 : {
						msg : 'Debes ingresar placa',
						field : $('#lb_add_numpla1'),
						type : 1
					},

					lb_add_numpla2 : {
						msg : 'Debes ingresar placa n\u00famero 2',
						field : $('#lb_add_numpla2'),
						type : 1
					},
					lb_ges_ofi2 : {
						msg : 'Debes seleccionar oficina para la gesti\u00f3n',
						field : $('#lb_ges_ofi2'),
						type : 1
					},
					city_zone_office : {
						msg : 'Debes seleccionar ciudad de la oficina gestora',
						field : $('#city_zone_office'),
						type : 1
					},
					dpto_zone_office : {
						msg : 'Debes seleccionar departamento de la oficina gestora',
						field : $('#dpto_zone_office'),
						type : 1
					}
				},

			},
			step3 : {
				lb_email : {
					msg : 'Debes ingresar Correo electr\u00f3nico',
					field : $('#lb_email'),
					type : 4
				},
				// lb_phone: {
				// msg: 'Debes ingresar teléfono de domicilio',
				// field: $('#lb_phone'),
				// type: 8,
				// max: 7
				// },
				lb_celphone : {
					msg : 'Debes ingresar el n\u00FAmero de celular',
					field : $('#lb_celphone'),
					type : 8,
					max : 10
				}
			},
			step4 : {
				lb_situacion_laboral : {
					msg : 'Debes seleccionar actividad ec\u00f3nomica',
					field : $('#lb_act_economic'),
					type : 1
				},
				lb_comp : {
					msg : 'Debes ingresar la Empresa en la que trabaja',
					field : $('#lb_comp'),
					type : 1
				},
				lb_comp_nit : {
					msg : 'Debes ingresar NIT de la empresa',
					field : $('#lb_comp_nit'),
					type : 3,
					min : 9
				},
				lb_comp_dg : {
					msg : 'Debes ingresar Digito de verificaci\u00f3n empresa',
					field : $('#lb_comp_dg'),
					type : 1
				},
				lb_cargo : {
					msg : 'Debes ingresar el cargo',
					field : $('#lb_cargo'),
					type : 1
				}
			},
			step5 : {
				lb_ing_mon : {
					msg : 'Debes indicar tus Ingresos mensuales',
					field : $('#lb_ing_mon'),
					type : 1,
					min : 8
				},
				lb_ing_ote : {
					msg : 'Debes indicar tus Ingresos mensuales',
					field : $('#lb_ing_ote'),
					type : 1
				}
			},
			step6 : {
				lb_exo_acc : {
					msg : 'Debes seleccionar EXONERACION GFM',
					field : $('#lb_exo_acc'),
					type : 1
				},
				lb_type_acc : {
					msg : 'Debes seleccionar un tipo de cuenta de ahorros',
					field : $('#lb_type_acc'),
					type : 1
				}
			},
			step7 : {
				checkbox1 : {
					msg : 'Debes aceptar los Politica de uso habeas data, t\u00e9rminos y condiciones',
					field : $('#checkbox1'),
					type : 1
				},
				checkbox2 : {
					msg : 'Debes aceptar los Politica de uso habeas data, t\u00e9rminos y condiciones',
					field : $('#checkbox2'),
					type : 1
				}
			}

		}
	}

})(window, document);
